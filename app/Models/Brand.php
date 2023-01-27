<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;
    use HasFactory;


    protected $table = 'brands';

    protected $fillable = [
        'title',
        'image',
        ];

    public function getSelfBrand() {
        return self::get();
    }

    public function product(){
        return $this->hasMany(Product::class);
    }

    public function get_product(){
        return $this->product();
    }




}
