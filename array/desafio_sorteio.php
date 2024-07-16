<div class="titulo">Desafio Sorteio</div>

<?php

$nomes = ["Elza", "Rapunzel", "Branca de neve", "Cinderela"];

//resolução minha
echo '<br>';
$sorteio = array_rand($nomes);
echo "$nomes[$sorteio]";

//resolução professor
echo '<br>';
$index = array_rand($nomes);
echo "<div center><h1>$nomes[$index]</h1></div>"

?>

<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>