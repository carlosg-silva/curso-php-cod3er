<div class="titulo">Primeira Classe</div>

<?php
class Cliente
{
  // atributos
  public $nome = "Anônimo";
  public $idade = 18;

  public function apresentar()
  {
    echo "Nome: {$this->nome}, Idade: {$this->idade}<br>";
  }
}

$c1 = new Cliente();
echo $c1->nome, '<br>';
$c1->nome = 'Ana Silva';
echo $c1->nome, '<br>';
$c1->idade = 20;

$c2 = new Cliente;
$c2->nome = 'Gabriel';
$c2->idade = 25;

$c1->apresentar();
$c2->apresentar();
