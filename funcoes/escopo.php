<div class="titulo">Função & Escopo</div>

<?php
function imprimirMensagens() {
    echo "Olá! ";
    echo "Até a próxima!<br>";
}

imprimirMensagens();
imprimirMensagens();
imprimirMensagens();

echo '<br><hr>';

$variavel = 1;

function trocarValor() {
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocarValor();
echo "Depois: $variavel <br>";

echo '<br><hr>';

function trocaValorDeVerdade() {
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";

var_dump(trocaValorDeVerdade());