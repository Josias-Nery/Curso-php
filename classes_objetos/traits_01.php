<div class="titulo">Traits #01</div>

<?php
trait validacao {
    public $a = 'Valor a';

    public function validarstring($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public $b = 'Valor b';
    private $c = 'Valor C (privado)';

    public function validarStringMelhor($str) {
        return isset($str) && trim($str);
    }
}

class Usuario2 {
    use validacao, validacaoMelhor;

    public function imprimirValorC() {
        echo '<br>', $this->c;
    }
}

//var_dump(validacao->validarstring(''));

$usuario = new Usuario2();
var_dump($usuario->validarstring(' '));
echo '<br>';
var_dump($usuario->validarStringMelhor(' '));
echo '<br>';
echo $usuario->a, '<br>' ,$usuario->b;
echo $usuario->imprimirValorC();