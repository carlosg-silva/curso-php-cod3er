<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
  <input type="text" name="param">
  <select name="conversao" id="conversao">
    <option value="km-milha">Km > Milha</option>
    <option value="milha-km">Milha > Km</option>
    <option value="metro-km">Metros > Km</option>
    <option value="km-metro">Km > Metros</option>
  </select>
  <button>Calcular</button>
</form>

<style>
form>* {
  font-size: 1.8rem;
}
</style>

<?php

$value = $_POST['param'] ?? 0;
$convert = $_POST['conversao'];

switch ($convert) {
  case 'km-milha':
    $distancia = $value * 0.62 . " mi.";
    $mensagem = "$value Km = $distancia Milhas";
    break;
  case 'milha-km':
    echo $value * 1.60 . " Km.";
    break;
  case 'metro-km':
    echo $value * 0.001  . " Km.";
    break;
  case 'km-metro':
    echo $value / 0.001 . " m.";
    break;
}

if ($convert && $value == false) {
  echo "Insira um número";
}