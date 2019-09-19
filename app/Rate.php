<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $table = 'rates';
    protected $fillable = ['user_id', 'product_id', 'score'];

    public function user() {
    	return $this->belongsTo(\App\User::class);
    }

    public function product() 
    {
    	return $this->belongsTo(\App\Product::class);
    }
}
