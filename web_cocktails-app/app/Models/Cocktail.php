<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    protected $table = "cocktails";

    protected $fillable = [
        "nombre",
        "alcoholico"
    ];

    public function ingredients(){
        return $this->belongsToMany(Ingredient::class, "cocktails_ingredients", "id_cocktail", "id_ingredient");
    }
}
