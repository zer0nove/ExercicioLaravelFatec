@extends('layout')
@section('titulo', 'Exercicio 7 - Fahrenheit para Celsius')
@section('conteudo')
        <h1>Exercício 7 - Fahrenheit para Celsius</h1>
        <form method="post" action="/exec7resp">
            <div class="mb-3">
                <label for="valor1" class="form-label">Informe o valor em Fahrenheit:</label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($celsius)
            <p> celsius: {{ $celsius }}</p>
        @endisset
@endsection