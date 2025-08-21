<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
        protected $table = "cocktail";

    protected $fillable = [
        "nombre",
        "atipo",
        "graduacion"
    ];

    public function cocktails(){
        return $this->belongsToMany(Cocktail::class, "cocktails_ingredients", "id_ingredient", "id_cocktail");
    }
}
