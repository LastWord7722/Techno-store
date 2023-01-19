<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'category_id',
        'brand_id',
        'image',
    ];

    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

}
