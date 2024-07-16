<div class="titulo">Valor vs Referências</div>

<?php
$variavel = 'valor inicial';
echo $variavel;

//Atribuição por valor
$variavelValor = $variavel;
echo '<br>';
echo $variavelValor;
$variavelValor = 'novo valor';
echo "<br>$variavel";
echo " $variavelValor";

// Atribuição por Referência
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';

echo "<br>$variavel $variavelReferencia";