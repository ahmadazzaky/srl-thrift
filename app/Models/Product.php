<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    // public function products()
    // {
    //     return $this->hasMany(Product::class);
    // }

    public function category() : BelongsTo{
        return $this->belongsTo(Category::class);
    }

}
