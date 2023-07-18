<div class="titulo">Membro Estático</div>

<?php
class A
{
  public $naoStatic = 'Variável de instância';
  public static $static = 'Variável de classe (estática)';

  public function mostrarA()
  {
    echo "Não estática = {$this->naoStatic}<br>";
    // Tentativa 1
    // echo "Estática = {$this->static}<br>";
    // Tentativa 2
    // echo "Estática = {self::$static}<br>";
    // Tentativa 3
    echo "Estática = " . self::$static . "<br>";
  }

  public static function mostrarStaticA()
  {
    // echo "Não estática = {$this->naoStatic}<br>";
    // echo "Estática = {$static}<br>";
    echo "Estática = " . self::$static . "<br>";
  }
}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStatica(); //Não é a forma ideal, não precisa criar instancia
echo '<br>';
echo A::$static, '<br>'; //Forma de acessar var static
A::mostrarStaticA(); //Forma de acessar function static

A::$static = 'Alterado membro de classe!';
echo A::$static, '<br>'; // acessar diretamente pela classe