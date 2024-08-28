<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    use HasFactory;

    protected $table = 'cocktails';

    protected $fillable = [
        'name',
        'ingredients',
        'image',
        'price',
        'gradiation',
        'is_alcoholic',
    ];

    public function cocktails()
    {
        return $this->belongsToMany(Ingredient::class, 'cocktails_ingredients');
    }
}
