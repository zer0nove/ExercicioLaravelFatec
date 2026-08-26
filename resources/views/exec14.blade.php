@extends('layout')
@section('titulo', 'Exercicio 14 - Conversão de Medida')
@section('conteudo')
        <h1>Exercício 14 - Conversão de Medida</h1>
        <form method="post" action="/exec14resp">
            <div class="mb-3">
                <label for="km" class="form-label">Informe o quilômetro:</label>
                <input type="number" id="km" name="km" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($milha)
            <p> Em Milhas: {{ $milha }}</p>
        @endisset
@endsection