<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'image_1',
        'image_2',
        'image_3',
        'size_id',
        'price',
        'status'
    ];

    public function sizes(): HasMany
    {
        return $this->hasMany(Size::class);
    }

    /**Un producto puede formar parte de solo una categoria */
    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }

    
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    /**Un producto pertenece a categorie-product */
    public function categories_product(): BelongsTo
    {
        return $this->belongsTo(Categories_product::class);
    }

    /**Un producto pertenece a size-product */
    public function sizes_product(): BelongsTo
    {
        return $this->belongsTo(Sizes_product::class);
    }

    /**Un productoo pertenece a products_order */
    public function products_order(): BelongsTo
    {
        return $this->belongsTo(Products_order::class);
    }

}
