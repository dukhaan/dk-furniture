<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carts extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'users_id',
        'products_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function products()
    {
        return $this->hasOne(Product::class, 'products_id', 'id');
    }
}
