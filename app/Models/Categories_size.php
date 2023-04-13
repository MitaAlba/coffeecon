<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories_size extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'size_id'
    ];

    /**Un categories-size tiene muchas categorias */
    public function categories(): HasManys
    {
        return $this->hasMany(Categorie::class);
    }

     /**Un categories-size tiene muchas sizes */
     public function sizes(): HasManys
     {
         return $this->hasMany(Size::class);
     }
}
