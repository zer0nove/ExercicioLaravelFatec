@extends('layout')
@section('titulo', 'Exercicio 13 - Conversão de Medida')
@section('conteudo')
        <h1>Exercício 13 - Conversão de Medida</h1>
        <form method="post" action="/exec13resp">
            <div class="mb-3">
                <label for="metro" class="form-label">Informe o metro:</label>
                <input type="number" id="metro" name="metro" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($cm)
            <p> Em centímetros: {{ $cm }}</p>
        @endisset
@endsection