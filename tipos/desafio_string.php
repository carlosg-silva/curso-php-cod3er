<div class="titulo">Desafio String</div>

<?php

// Enunciado:
// Avaliando os métodos da documentação da string, qual o método que a posicao do texto 'abc' na string '!AbcaBcabc' retorne 1?


$strCompleta = "!AbcaBcabc";
$strProcurar = "abc";

echo strpos($strCompleta, $strProcurar);
echo "<br>";
echo stripos($strCompleta, $strProcurar);
