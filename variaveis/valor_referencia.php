<div class="titulo">Valor vs Referência </div>

<?php
$variavel = "valor inicial";
echo $variavel;

// Atribuicao por valor
$variavelValor = $variavel;
echo "<br>$variavelValor";
$variavelValor = "novo valor";
echo "<br>$variavel";
echo " $variavelValor";

// Atribuicao por referencia
$variavelReferencia = &$variavel;
$variavelReferencia = "mesma referência";

echo "<br> $variavel";
echo "<br> $variavelReferencia";
