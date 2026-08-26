@extends('layout')
@section('titulo', 'Exercicio 19 - Conversão de Tempo')
@section('conteudo')
        <h1>Exercício 19 - Conversão de Tempo</h1>
        <form method="post" action="/exec19resp">
            <div class="mb-3">
                <label for="dias" class="form-label" >Informe o valor em dias:</label>
                <input type="number" id="dias" name="dias" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($horas, $minutos, $segundos)
            <p> Horas, minutos e segundos: {{ $horas. " : " .$minutos. " : " . $segundos }}</p>
        @endisset
@endsection