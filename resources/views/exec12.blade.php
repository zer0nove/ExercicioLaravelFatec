@extends('layout')
@section('titulo', 'Exercicio 12 - Potência')
@section('conteudo')
        <h1>Exercício 12 - Potência</h1>
        <form method="post" action="/exec12resp">
            <div class="mb-3">
                <label for="base" class="form-label">Informe a base:</label>
                <input type="number" id="base" name="base" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="expo" class="form-label">Informe o expoente:</label>
                <input type="number" id="expo" name="expo" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($elevado)
            <p> Cálculo da elevação: {{ $elevado }}</p>
        @endisset
@endsection