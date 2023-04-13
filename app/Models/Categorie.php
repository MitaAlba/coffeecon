<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
        ];


    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    /**Una categoria pertenece a categorie-product */
    public function categories_product(): BelongsTo
    {
        return $this->belongsTo(Categories_product::class);
    }

    /**Una categoria pertenece a categorie-size */
    public function categories_size(): BelongsTo
    {
        return $this->belongsTo(Categories_size::class);
    }
}
