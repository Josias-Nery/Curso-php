<div class="titulo">Desafio String</div>

<?php

//Enunciado:
// Avaliando os métodos da documentação da string,
// qual o método que a posicao do texto 'abc'
// na string '!AbcaBcabc' retorne 1?

echo strpos('!AbcaBcabc', 'abc'). '<br>';
echo stripos('!AbcaBcabc', 'abc') . '<br>'; #resposta correta

echo strpos(strtolower('!AbcaBcabc'), strtolower('ABC')) . '<br>';


