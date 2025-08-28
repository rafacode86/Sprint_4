<?php

use App\Http\Controllers\CocktailController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::controller(CocktailController::class)->group(function(){
    Route::get('/','index');
    Route::get('cocktail/create','create');
    Route::get('cocktail/detail','show');
});

