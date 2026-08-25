<?php

use App\Http\Controllers\execController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ex1', [execController::class, 'abrirFormExec1']
);
Route::post('/ex1', [execController::class, 'respExec1']
);

Route::get('/ex2', [execController::class, 'abrirFormExec2']
);
Route::post('/ex2', [execController::class, 'respExec2']
);

