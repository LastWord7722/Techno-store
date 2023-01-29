<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oreder extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $guarded = [];

    public function products(){
       return $this->belongsToMany(Product::class, 'order_product','order_id', 'product_id')->
           withPivot('quantity');
    }
}
