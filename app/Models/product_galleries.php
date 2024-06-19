<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_galleries extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'products_id',
        'url',
        'is_featured',
    ];

    public function products()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }
}
