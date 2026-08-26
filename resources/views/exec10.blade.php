@extends('layout')
@section('titulo', 'Exercicio 10 - Perímetro do Retângulo')
@section('conteudo')
        <h1>Exercício 10 - Perímetro do Retângulo</h1>
        <form method="post" action="/exec10resp">
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
        @isset($perimetroRet)
            <p> Perímetro do retângulo: {{ $perimetroRet }}</p>
        @endisset
@endsection