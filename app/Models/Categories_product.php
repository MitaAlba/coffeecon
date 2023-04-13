<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories_product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'product_id'
    ];

    /**Una categorie-products puede tener muchas categorias */
    public function categories(): HasMany
    {
        return $this->hasMany(Categorie::class);
    }

    /**Una categorie-products puede tener muchos productos */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}