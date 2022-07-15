<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'manufacturers_id',
        'model',
        'year',
        'engine',
        'price',
        'discount',
        'transmission',
        'power',
        'color',
        'door',
        'properties',
    ];
}
