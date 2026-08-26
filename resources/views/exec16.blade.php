@extends('layout')
@section('titulo', 'Exercicio 16 - Desconto')
@section('conteudo')
        <h1>Exercício 16 - Desconto</h1>
        <form method="post" action="/exec16resp">
            <div class="mb-3">
                <label for="valor" class="form-label" >Informe o valor do produto:</label>
                <input type="number" id="valor" name="valor" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Informe desconto:</label>
                <input type="number" id="desc" name="desc" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($desconto)
            <p> Valor com desconto: R${{ $desconto }}</p>
        @endisset
@endsection