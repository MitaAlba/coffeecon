<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_store extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'store_id'
    ];
    
    /**Una order-store tiene varias ordenes */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    /**Una order-store tiene varias store */
    public function stores(): HasMany
    {
        return $this->hasMany(Store::class);
    }
}
