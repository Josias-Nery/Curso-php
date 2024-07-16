<div class="titulo">Traits #02</div>

<?php

trait validacao {
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public function validarString($str) {
        return isset($str) && trim($str);
    }
}

class User {
    use validacao, validacaoMelhor {
        validacaoMelhor::validarString insteadof validacao;
        //validacao::validarString insteadOf validacaoMelhor;

        validacao::validarString as validacaoSimples;
    }
}

$usuario = new User();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validacaoSimples(' '));