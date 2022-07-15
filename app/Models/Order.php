<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_id',
        'cars_id',
        'total_amount',
        'payment_completed',
        'payment_method'
    ];
}
