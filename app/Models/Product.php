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

    public function comment_user(){
        return $this->hasMany(Comment::class, 'product_id', 'id')->
        join('Users','comments.user_id','=', 'users.id')->
        select('comments.created_at', 'users.name','comments.message', 'comments.user_id', 'comments.id')->
        orderBy('created_at', 'desc');
    }



}
