<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $fillable = [
        'user_id',
        'product_id',
        'message'
    ];

    public function user(){
        return $this->hasMany(User::class);
    }
    public function product(){
        return $this->hasMany(Product::class);
    }

    public function getDataAsCarbonAttribute()
    {
        return Carbon::parse($this->created_at);
    }
}
