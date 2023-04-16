<div class="titulo">Desafio Impressão</div>

<!-- 
Enunciado:
-Imprima apenas os valores de array que contém indice par
-Resolver com for e foreach
-Valor esperado: AAA, CCC, EEE
 -->

<?php
$array = [
  "AAA",
  "BBB",
  "CCC",
  "DDD",
  "EEE",
  "FFF"
];

// Utilizando for
for ($i = 0; $i < count($array); $i++) {
  if ($i % 2 === 1) continue;
  echo "$array[$i] <br>";
}

echo "<hr>";

// Utilizando foreach
foreach ($array as $indice => $valor) {
  if ($indice  % 2 === 1) continue;
  echo "$valor <br>";
}