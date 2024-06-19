<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction_items extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'users_id',
        'products_id',
        'transactions_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'products_id', 'id');
    }

    public function transactions(){
        return $this->belongsTo(transactions::class, 'transactions_id', 'id');
    }

}
