@extends('layout')
@section('titulo', 'Exercicio 15 - IMC')
@section('conteudo')
        <h1>Exercício 15 - IMC</h1>
        <form method="post" action="/exec15resp">
            <div class="mb-3">
                <label for="kg" class="form-label" >Informe o peso ( em KG ):</label>
                <input type="number" id="kg" name="kg" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="mt" class="form-label">Informe a altura ( em Metro ):</label>
                <input type="number" id="mt" name="mt" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($imc)
            <p> IMC: {{ $imc }}</p>
        @endisset
@endsection