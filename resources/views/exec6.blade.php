@extends('layout')
@section('titulo', 'Exercicio 6 - Celsius para Fahrenheit')
@section('conteudo')
        <h1>Exercício 6 - Celsius para Fahrenheit</h1>
        <form method="post" action="/exec6resp">
            <div class="mb-3">
                <label for="valor1" class="form-label">Informe o valor em Celsius:</label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($fahrenheit)
            <p> fahrenheit: {{ $fahrenheit }}ºF</p>
        @endisset
@endsection