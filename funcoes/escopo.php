<div class="titulo">Função e Escopo</div>

<?php
function imprimirMensagens()
{
  echo "Olá! ";
  echo "Até a próxima!<br>";
}

imprimirMensagens();
imprimirMensagens();
imprimirMensagens();

$var = 1;
function trocaValor()
{
  $var = 2;
  echo "Durante a função: $var <br>";
}

echo "Antes: $var <br>";
trocaValor();
echo "Depois: $var <br>";

function trocaValorDeVerdade()
{
  global $var;
  $var = 3;
  echo "Durante a função: $var <br>";
}

echo "Antes: $var <br>";
trocaValorDeVerdade();
echo "Depois: $var <br>";

var_dump(trocaValorDeVerdade());
