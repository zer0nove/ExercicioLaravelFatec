<?php

use App\Http\Controllers\execController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exec1', [execController::class, 'abrirFormExec1']
);
Route::post('/exec1resp', [execController::class, 'respExec1']
);

Route::get('/exec2', [execController::class, 'abrirFormExec2']
);
Route::post('/exec2resp', [execController::class, 'respExec2']
);

