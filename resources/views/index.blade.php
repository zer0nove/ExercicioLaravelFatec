@extends('layout')

@section('titulo', 'Teste Menu')

@section('conteudo')
    <h1 class="mb-4 text-center">Teste Menu Lista</h1>

    <div class="row justify-content-center">
        <div class="col-md-3 mb-3">
            <div class="list-group">
                <a href="/exec1" class="list-group-item list-group-item-action"><strong>1.</strong> Soma</a>
                <a href="/exec2" class="list-group-item list-group-item-action"><strong>2.</strong> Subtração</a>
                <a href="/exec3" class="list-group-item list-group-item-action"><strong>3.</strong> Multiplicação</a>
                <a href="/exec4" class="list-group-item list-group-item-action"><strong>4.</strong> Divisão</a>
                <a href="/exec5" class="list-group-item list-group-item-action"><strong>5.</strong> Média Simples</a>
                <a href="/exec6" class="list-group-item list-group-item-action"><strong>6.</strong> Celsius para Fahrenheit</a>
                <a href="/exec7" class="list-group-item list-group-item-action"><strong>7.</strong> Fahrenheit para Celsius</a>
                <a href="/exec8" class="list-group-item list-group-item-action"><strong>8.</strong> Área do Retângulo</a>
                <a href="/exec9" class="list-group-item list-group-item-action"><strong>9.</strong> Área do Círculo</a>
                <a href="/exec10" class="list-group-item list-group-item-action"><strong>10.</strong> Perímetro do Retângulo</a>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="list-group">
                <a href="/exec11" class="list-group-item list-group-item-action"><strong>11.</strong> Perímetro do Círculo</a>
                <a href="/exec12" class="list-group-item list-group-item-action"><strong>12.</strong> Potência</a>
                <a href="/exec13" class="list-group-item list-group-item-action"><strong>13.</strong> Metros para Centímetros</a>
                <a href="/exec14" class="list-group-item list-group-item-action"><strong>14.</strong> Quilômetros para Milhas</a>
                <a href="/exec15" class="list-group-item list-group-item-action"><strong>15.</strong> Cálculo de IMC</a>
                <a href="/exec16" class="list-group-item list-group-item-action"><strong>16.</strong> Cálculo de Desconto</a>
                <a href="/exec17" class="list-group-item list-group-item-action"><strong>17.</strong> Juros Simples</a>
                <a href="/exec18" class="list-group-item list-group-item-action"><strong>18.</strong> Juros Compostos</a>
                <a href="/exec19" class="list-group-item list-group-item-action"><strong>19.</strong> Conversão de Dias</a>
                <a href="/exec20" class="list-group-item list-group-item-action"><strong>20.</strong> Velocidade Média</a>
            </div>
        </div>
    </div>
@endsection