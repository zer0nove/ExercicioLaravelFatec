@extends('layout')
@section('titulo', 'Exercicio 3 - Multiplicação')
@section('conteudo')
        <h1>Exercício 3 - Multiplicação</h1>
        <form method="post" action="/exec3resp">
            <div class="mb-3">
                <label for="valor1" class="form-label">Informe o primeiro valor:</label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valor2" class="form-label">Informe o segundo valor:</label>
                <input type="number" id="valor2" name="valor2" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($multiplicar)
            <p>Multiplicar: {{ $multiplicar }}</p>
        @endisset
@endsection