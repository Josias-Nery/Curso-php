<div class="titulo">Variáveis</div>

<?php
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
echo $somaDosNumeros;

echo '<br>';
echo isset($somaDosNumeros);

unset($somaDosNumeros);
echo '<br>';
var_dump($somaDosNumeros);

$variavel = "Agora sou uma string!";
echo '<br>' . $variavel;

// Nomes de variavel
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; // evitar acentuação!
//$6var = 'invalida';
//$%var7 = 'invalida';
// $var8% = 'invalida'; 

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);