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
        return view('exec1', compact('soma'));
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
        return view('exec2', compact('subtrai'));
    }

    public function abrirFormExec3() {
    return view('exec3');
    }

    public function respExec3 (Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $multiplicar = $valor1 * $valor2;
        return view('exec3', ['multiplicar' => $multiplicar]);
    }

    public function abrirFormExec4() {
        return view('exec4');
    }

    public function respExec4 (Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        if($valor2 != 0){
            $dividir = $valor1 / $valor2;
        } else {
            $dividir = 0;
        }
        return view('exec4', ['dividir' => $dividir]);
    }

    public function abrirFormExec5() {
        return view('exec5');
    }

    public function respExec5 (Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $valor3 = $request->valor3;
        $medSimples = ($valor1 + $valor2 + $valor3) / 3;

        return view('exec5', ['mediaSimples' => $medSimples]);
    }

    public function abrirFormExec6() {
        return view('exec6');
    }

    public function respExec6 (Request $request){
        $valor1 = $request->valor1;
        $fahrenheit = (($valor1 * 1.8) + 32);
        return view('exec6', ['fahrenheit' => $fahrenheit]);
    }

    public function abrirFormExec7() {
        return view('exec7');
    }

    public function respExec7 (Request $request){
        $valor1 = $request->valor1;
        $celsius = (($valor1 - 32) / 1.8);
        return view('exec7', ['celsius' => $celsius]);
    }

    public function abrirFormExec8() {
        return view('exec8');
    }

    public function respExec8 (Request $request){
        $largura = $request->largura;
        $altura = $request->altura;
        $areaRetangulo = $largura * $altura;
        return view('exec8', ['areaRetangulo' => $areaRetangulo]);
    }

    public function abrirFormExec9() {
        return view('exec9');
    }

    public function respExec9 (Request $request){
        $raio = $request->raio;
        $areaCirculo = (($raio**2) * 3.14 );
        return view('exec9', ['areaCirculo' => $areaCirculo]);
    }

    public function abrirFormExec10() {
        return view('exec10');
    }

    public function respExec10 (Request $request){
        $largura = $request->largura;
        $altura = $request->altura;
        $perimetroRet = ($largura + $altura) * 2;
        return view('exec10', ['perimetroRet' => $perimetroRet]);
    }

    public function abrirFormExec11() {
        return view('exec11');
    }

    public function respExec11 (Request $request){
        $raio = $request->raio;
        $perimetroCir = (2 * 3.14 * $raio);
        return view('exec11', ['perimetroCir' => $perimetroCir]);
    }

    public function abrirFormExec12() {
        return view('exec12');
    }

    public function respExec12 (Request $request){
        $base = $request->base;
        $expo = $request->expo;
        $elevado = $base**$expo;
        return view('exec12', ['elevado' => $elevado]);
    }

    public function abrirFormExec13() {
        return view('exec13');
    }

    public function respExec13 (Request $request){
        $metro = $request->metro;
        $cm = $metro * 100;
        return view('exec13', ['cm' => $cm]);
    }

    public function abrirFormExec14() {
        return view('exec14');
    }

    public function respExec14 (Request $request){
        $km = $request->km;
        $milha = $km * 0.621371;
        return view('exec14', ['milha' => $milha]);
    }

    public function abrirFormExec15() {
        return view('exec15');
    }

    public function respExec15 (Request $request){
        $peso = $request->kg;
        $altura = ($request->mt) / 100;
        $imc = ($peso / ($altura **2));
        return view('exec15', ['imc' => $imc]);
    }


    public function abrirFormExec16() {
        return view('exec16');
    }

    public function respExec16 (Request $request){
        $valor = $request->valor;
        $desc = $request->desc;
        $desconto = $valor - ( $valor * ( $desc / 100 ) );
        return view('exec16', ['desconto' => $desconto]);
    }

    public function abrirFormExec17() {
        return view('exec17');
    }

    public function respExec17 (Request $request){
        $capital = $request->capital;
        $taxa = $request->tax;
        $periodo = $request->per;
        $jurosSimples = $capital *  ( $taxa / 100 ) * $periodo;
        $montante = $capital + $jurosSimples;
        return view('exec17', ['jurosSimples' => $montante]);
    }

    public function abrirFormExec18() {
        return view('exec18');
    }

    public function respExec18 (Request $request){
        $capital = $request->capital;
        $taxa = $request->tax;
        $periodo = $request->per;
        $montante = $capital *  ((( $taxa / 100 ) +1 )** $periodo);
        return view('exec18', ['jurosComposto' => $montante]);
    }

    public function abrirFormExec19() {
        return view('exec19');
    }

    public function respExec19 (Request $request)
    {
        $valor1 = $request->dias;
        $horas = $valor1 * 24;
        $minutos = $horas * 60;
        $segundos = $minutos * 60;
        return view('exec19', ['horas' => $horas, 'minutos' => $minutos, 'segundos' => $segundos]);
    }

    public function abrirFormExec20() 
    {
        return view('exec20');
    }

    public function respExec20 (Request $request)
    {
        $valor1 = $request->distancia;
        $valor2 = $request->tempo;
        $velocidadeMedia = $valor1 / $valor2;
        return view('exec20', ['velocidadeMedia' => $velocidadeMedia]);
    
    }
}