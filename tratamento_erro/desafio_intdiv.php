<?php 
namespace Aritmetica;

class NaoInteiroExcpetion extends \Exception {

}

function intdiv($a, $b) {
    if($b == 0) {
        throw new \DivisionByZeroError();
    }

    if($a % $b > 0) {
        throw new NaoInteiroExcpetion();
    }

    return $a / $b;
}