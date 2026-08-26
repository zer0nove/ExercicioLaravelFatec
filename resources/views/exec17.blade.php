@extends('layout')
@section('titulo', 'Exercicio 17 - Juros Simples')
@section('conteudo')
        <h1>Exercício 17 - Juros Simples</h1>
        <form method="post" action="/exec17resp">
            <div class="mb-3">
                <label for="capital" class="form-label" >Informe o capital:</label>
                <input type="number" id="capital" name="capital" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="tax" class="form-label">Informe a taxa:</label>
                <input type="number" id="tax" name="tax" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="per" class="form-label">Informe o período:</label>
                <input type="number" id="per" name="per" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($jurosSimples)
            <p> Juros Simples: R${{ $jurosSimples }}</p>
        @endisset
@endsection