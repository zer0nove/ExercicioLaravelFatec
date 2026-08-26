@extends('layout')
@section('titulo', 'Exercicio 9 - Área do Círculo')
@section('conteudo')
        <h1>Exercício 9 - Área do Círculo</h1>
        <form method="post" action="/exec9resp">
            <div class="mb-3">
                <label for="raio" class="form-label">Informe o raio:</label>
                <input type="number" id="raio" name="raio" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($areaCirculo)
            <p> Área do Círculo: {{ $areaCirculo }}cm²</p>
        @endisset
@endsection
