<div class="titulo">Desafio For</div>

<!-- 
  Usar o for...
  #
  ##
  ###
  ####
  #####
  1) Pode usar incremento $i++
  2) Não pode usar incremento $i++
 -->

<?php

// Utilizando incremento
$impressao = '';
for ($i = 1; $i <= 5; $i++) {
  $impressao .= '#';
  echo "$impressao <br>";
}

echo "<hr>";

for ($impressao2 = '#'; $impressao2 !== '######'; $impressao2 .= '#') {
  echo "$impressao2 <br>";
}
