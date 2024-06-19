<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactions extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',    
        'users_id',
        'name',
        'email',
        'address',
        'phone',
        'courier',
        'payment',
        'payment_url',
        'total_price',
        'status',
    ];
    
    public function users()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
    
}
