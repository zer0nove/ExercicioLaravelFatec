@extends('layout')
@section('titulo', 'Exercicio 8 - Área do Retângulo')
@section('conteudo')
        <h1>Exercício 8 - Área do Retângulo</h1>
        <form method="post" action="/exec8resp">
            <div class="mb-3">
                <label for="largura" class="form-label">Informe a largura:</label>
                <input type="number" id="largura" name="largura" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="altura" class="form-label">Informe a altura:</label>
                <input type="number" id="altura" name="altura" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($areaRetangulo)
            <p> Área de Retângulo: {{ $areaRetangulo }}m²</p>
        @endisset
@endsection