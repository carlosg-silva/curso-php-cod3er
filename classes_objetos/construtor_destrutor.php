<div class="titulo">Construtor e Destrutor</div>

<?php
class Pessoa
{
  public $nome;
  public $idade;

  function __construct($novoNome, $idade = 18)
  {
    echo 'Construtor invocado! <br>';
    $this->nome = $novoNome;
    $this->idade = $idade;
  }

  function __destruct()
  {
    echo 'E morreu!';
  }

  public function apresentar()
  {
    echo "{$this->nome}, {$this->idade} anos<br>";
  }
}

$pessoaA = new Pessoa('Vanessa', 20);
$pessoaA->apresentar();
unset($pessoaA);
echo '<br>';
$pessoaB = new Pessoa('João Pedro', 30);
$pessoaB->apresentar();
$pessoaB = null;

// $pessoa = new Pessoa(); <--Problema