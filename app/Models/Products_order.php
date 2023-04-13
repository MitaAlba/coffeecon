<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products_order extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'order_id', 
        'amount',
        'price',
        'size_id'
    ];
    /**Un products-order tiene varios productos */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    /**Un products-order tiene varias ordenes */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

}
