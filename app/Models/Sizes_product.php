<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sizes_product extends Model
{
    use HasFactory;

    protected $fillable = [
        'size_id',
        'product_id'
    ];

    /**Un size-productos puede tener varios productos*/
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    /**Un size-productos puede tener varias size*/
    public function sizes(): HasMany
    {
        return $this->hasMany(Size::class);
    }
}
