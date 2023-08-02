<div class="titulo">Desafio do Módulo</div>

<?php
require_once('usuario.php');
$usuario = new Usuario('Gustavo Mendonça', 21, 'gust_mend');
$usuario->apresentar();
unset($usuario);
