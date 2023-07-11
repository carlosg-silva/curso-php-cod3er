<div class="titulo">Desafio Data</div>

<?php

class Data
{
  public $dia = "01";
  public $mes = "01";
  public $ano = 1970;

  public function apresentar()
  {
    echo "{$this->dia}/{$this->mes}/{$this->ano}<br>";
  }
}

$date = new Data();
$date->apresentar();

$aniversario = new Data;
$aniversario->dia = "12";
$aniversario->mes = "06";
$aniversario->ano = 1992;
$aniversario->apresentar();
