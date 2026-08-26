@extends('layout')
@section('titulo', 'Exercicio 11 - Perímetro do Círculo')
@section('conteudo')
        <h1>Exercício 11 - Perímetro do Círculo</h1>
        <form method="post" action="/exec11resp">
            <div class="mb-3">
                <label for="raio" class="form-label">Informe o raio:</label>
                <input type="number" id="raio" name="raio" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($perimetroCir)
            <p> Perímetro do círculo: {{ $perimetroCir }}</p>
        @endisset
@endsection