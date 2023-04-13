<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status'
    ];
    
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**Un size pertenece a categorie-size */
    public function categories_size(): BelongsTo
    {
        return $this->belongsTo(Categories_size::class);
    }

    /**Un size pertenece a size-product */
    public function sizes_product(): BelongsTo
    {
        return $this->belongsTo(Size_product::class);
    }
}

