<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('api')->group(function(){
    Route::apiResource('films',FilmController::class);
});
