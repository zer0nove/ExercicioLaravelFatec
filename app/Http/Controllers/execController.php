<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class execController extends Controller
{
    public function abrirFormExec1()
    {
        return view ('exec1');
    }
    
    public function respExec1 (Request $request)
    {
        $valor1 = $request -> valor1;
        $valor2 = $request -> valor2;
        $soma = $valor1 + $valor2;
        return view('resultado', compact('soma'));
    }

    public function abrirFormExec2()
    {
        return view ('exec2');
    }

    public function respExec2 (Request $request)
    {
        $valor1 = $request -> valor1;
        $valor2 = $request -> valor2;
        $subtrai = $valor1 - $valor2;
        return view('resultado', compact('subtrai'));
    }

    
}
