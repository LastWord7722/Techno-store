<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'title',
        'image',
    ];

    public function product(){
        return $this->hasMany(Product::class);
    }
    public function get_product(){
        return $this->product();
    }
}
