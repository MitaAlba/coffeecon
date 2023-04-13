<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'address',
        'schedule',
        'status'
    ];


    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    /**Una store pertenece a order-store */
    public function order_store(): BelongsTo
    {
        return $this->belongsTo(Order_store::class);
    }

    

}
