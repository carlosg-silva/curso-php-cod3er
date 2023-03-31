<div class="titulo">Variáveis</div>

<?php
$numeroA = 13;
echo $numeroA . "<br>";
var_dump($numeroA);

echo "<br>";
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;

echo $somaDosNumeros;
echo "<br>";
echo isset($somaDosNumeros);
echo "<br>";

unset($somaDosNumeros);
var_dump($somaDosNumeros);

$variavel = 10;
echo "<br>" . $variavel;

$variavel = "Agora sou uma string!";
echo "<br>" . $variavel;

// Nomes de variável
$var = "valida";
$var2 = "valida";
$VAR3 = "valida";
$_var_ = "valida";
//$6var = "invalida";
// $%var7 = "valida";
// $8var8 = "valida";

echo "<br>";
var_dump($_SERVER["HTTP_HOST"]);
