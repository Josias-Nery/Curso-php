<div class="titulo">Desafio Operadores Lógicos</div>

<!-- 
    Dois trabalhos -> terça e quinta!
    - Se os dois forem executados -> TV 50' e Sorvete
    - Se apenas um for executado -> TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável!
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <div>
        <label for="t1">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button,
    select {
        font-size: 1.8rem;
    }
</style>

<?php

if (isset($_POST['t1']) && isset($_POST['t2'])) {
    $t1 = $_POST['t1'] === '1';
    $t2 = !!$_POST['t2'];
    $tv = '';
    $sorvete = false;

    //Resolução professor
    if ($t1 and $t2) {
        $tv = '50"';
    } elseif ($t1 xor $t2) {
        $tv = '32"';
    }

    if ($t1 or $t2) {
        $sorvete = true;
    }

    if ($tv) {
        $resultado = "Vamos comprar uma Tv de $tv";
    } else {
        $resultado = "Sem Tv dessa vez :(";
    }

    if (!$sorvete) {
        $resultado .= '<br>Estamos mais saudáveis!';
    } else {
        $resultado .= '<br>Sorvete liberado \o/';
    }

    echo "<p>$resultado</p>";
}




// Resolução feita por mim
/*  if ($t1 && $t2 === true) {
    echo 'TV 50 e Sorvete';
} elseif($t1 == true and $t2 == false) {
    echo 'TV 32 e Sorvete';
} elseif ($t1 == false and $t2 == true) {
    echo 'TV 32 e Sorvete';
}  else {
    echo 'Fica em casa mais saudável';
} */