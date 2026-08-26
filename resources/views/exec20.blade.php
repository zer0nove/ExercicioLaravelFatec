@extends('layout')
@section('titulo', 'Exercicio 20 - Velocidade Média')
@section('conteudo')
        <h1>Exercício 20 - Velocidade Média</h1>
        <form method="post" action="/exec20resp">
            <div class="mb-3">
                <label for="distancia" class="form-label" >Informe a distância:</label>
                <input type="number" id="distancia" name="distancia" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="tempo" class="form-label">Informe o tempo:</label>
                <input type="number" id="tempo" name="tempo" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($velocidadeMedia)
            <p> Velocidade média: {{ $velocidadeMedia }}</p>
        @endisset
@endsection