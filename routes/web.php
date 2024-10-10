<?php

use App\Http\Controllers\TiempoConsola;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/times/{idConsola}', [TiempoConsola::class, 'getTimesForConsoles']);

//posibles metodos de rutas
//get obtiene la ruta
//post mandar informacion no visible a bd
//las siguientes son post pero para diferentes usos
//put crea
//patch actualiza parcial
//delete borra