<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        /* seed user */
        $users = factory(\App\User::class, 10)->create();

        /* seed product suggestion */
        foreach($users as $user) {
        	$product_suggestions = factory(\App\ProductSuggestion::class, 3)->create();
        	$user->product_suggestions()->saveMany($product_suggestions);
        }

        /* seed bill */
        foreach($users as $user) {
        	$bills = factory(\App\Bill, 3)->create();
        	foreach($users as $user) {
        		$user->bills()->saveMany($bills);
        	}
        }

        /* seed product */
        $products = factory(\App\Product::class, 10)->create();

        /* seed image */
        foreach($products as $product) {
        	$images = factory(\App\Product::class, 3)->create();
        	$product->images()->saveMany($images);
        }

        /* seed rate */
        foreach($users as $user) {
            foreach($products as $product) {
                $rates = factory(\App\Rate::class, 1)->create();
                $rate = $rates[0];
                $user->rates()->save($rate);
                $product->rates()->save($rate);
            }
        }

        /* seed comment */
        foreach($users as $user) {
            foreach($products as $product) {
                $comments = factory(\App\Comment::class, 1)->create();
                $comment = $comments[0];
                $user->comments()->save($comment);
                $product->comments()-save($comment);
            }
        }

        /* seed bill_product */
        foreach($bills as $bill) {
            foreach($products as $product) {
                $bill->product()->save($product, ['quantity' => rand(0, 10)], 'bill_product');
            }
        }

        /* seed product_category */
        foreach($products as $product) {
            foreach($categories as $category) {
                $product->categories()->save($category);
            }
        }

        /* seed view_history */
        foreach($users as $user) {
            foreach($products as $product) {
                $view_histories = factory(\App\ViewHistory::class, 1);
                $view_history = $view_histories[0];
                $user->view_history()->save($view_history);
                $product->view_history()->save($view_history);
            }
        }
    }
}
