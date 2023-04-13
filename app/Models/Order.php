<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'store_id',
        'product_id',
        'total',
        'status'
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

        //Una order puede pertenecer a una store 
    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }

    /**Una order pertenece a products_order */
    public function products_order(): BelongsTo
    {
        return $this->belongsTo(Products_order::class);
    }

    /**Una order pertenece a order-store */
    public function order_store(): BelongsTo
    {
        return $this->belongsTo(Order_store::class);
    }

    // Una orden pertenece a un usuario
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}

