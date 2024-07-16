<div class="titulo">Desafio Classe Data</div>

<?php

class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar() {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$date = new Data;
$date->dia = 01;
$date->mes = 01;
$date->ano = 1970;
echo $date->apresentar(), '<br>';

$date->dia = 18;
$date->mes = 06;
$date->ano = 2024;
echo $date->apresentar();