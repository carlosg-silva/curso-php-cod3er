<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ["Elza", "Rapunzel", "Branca de neve", "Cinderela"];

$random  = array_rand($nomes);

echo "<div center><h1>$nomes[$random]</h1></div>";

?>

<style>
[center] {
  display: flex;
  justify-content: center;
}
</style>