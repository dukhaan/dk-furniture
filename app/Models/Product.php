<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected  $fillable = [
        'id',
        'name',
        'price',
        'description',
        'slug',
    ];

    public function carts()
    {
        return $this->hasOne(Cart::class, 'products_id', 'id');
    }

    public function product_galleries()
    {
        return $this->hasMany(ProductGallery::class, 'products_id', 'id');
    }

    public function transaction_items()
    {
        return $this->belongsTo(transaction_items::class, 'products_id', 'id');
    }

}
