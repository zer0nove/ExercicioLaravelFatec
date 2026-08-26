<?php

use App\Http\Controllers\execController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/exec1', [execController::class, 'abrirFormExec1']
);
Route::post('/exec1resp', [execController::class, 'respExec1']
);

Route::get('/exec2', [execController::class, 'abrirFormExec2']
);
Route::post('/exec2resp', [execController::class, 'respExec2']
);

Route::get('/exec3', [execController::class, 'abrirFormExec3']
);
Route::post('/exec3resp', [execController::class,'respExec3']
);

Route::get('/exec4', [execController::class, 'abrirFormExec4']
);
Route::post('/exec4resp', [execController::class, 'respExec4']
);

Route::get('/exec5', [execController::class, 'abrirFormExec5']
);
Route::post('/exec5resp', [execController::class, 'respExec5']
);

Route::get('/exec6', [execController::class, 'abrirFormExec6']
);
Route::post('/exec6resp', [execController::class, 'respExec6']
);

Route::get('/exec7', [execController::class, 'abrirFormExec7']
);
Route::post('/exec7resp', [execController::class,'respExec7']
);

Route::get('/exec8', [execController::class, 'abrirFormExec8']
);
Route::post('/exec8resp', [execController::class, 'respExec8']
);

Route::get('/exec9', [execController::class, 'abrirFormExec9']
);
Route::post('/exec9resp', [execController::class, 'respExec9']
);

Route::get('/exec10', [execController::class, 'abrirFormExec10']
);
Route::post('/exec10resp', [execController::class, 'respExec10']
);

Route::get('/exec11', [execController::class, 'abrirFormExec11']
);
Route::post('/exec11resp', [execController::class, 'respExec11']
);

Route::get('/exec12', [execController::class, 'abrirFormExec12']
);
Route::post('/exec12resp', [execController::class, 'respExec12']
);

Route::get('/exec13', [execController::class, 'abrirFormExec13']
);
Route::post('/exec13resp', [execController::class, 'respExec13']
);

Route::get('/exec14', [execController::class, 'abrirFormExec14']
);
Route::post('/exec14resp', [execController::class, 'respExec14']
);

Route::get('/exec15', [execController::class, 'abrirFormExec15']
);
Route::post('/exec15resp', [execController::class, 'respExec15']
);

Route::get('/exec16', [execController::class, 'abrirFormExec16']
);
Route::post('/exec16resp', [execController::class, 'respExec16']
);

Route::get('/exec17', [execController::class, 'abrirFormExec17']
);
Route::post('/exec17resp', [execController::class, 'respExec17']
);

Route::get('/exec18', [execController::class, 'abrirFormExec18']
);
Route::post('/exec18resp', [execController::class, 'respExec18']
);

Route::get('/exec19', [execController::class, 'abrirFormExec19']
);
Route::post('/exec19resp', [execController::class, 'respExec19']
);

Route::get('/exec20', [execController::class, 'abrirFormExec20']
);
Route::post('/exec20resp', [execController::class, 'respExec20']
);

