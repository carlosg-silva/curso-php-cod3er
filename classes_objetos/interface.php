<div class="titulo">Interface</div>

<!-- As interfaces por padrão são públicas -->

<?php
interface Animal
{
  function respirar();
}

interface Mamifero
{
  function mamar();
}

interface Canino extends Animal, Mamifero
{
  function latir(): string;
}

class Cachorro implements Canino
{
  function respirar()
  {
    return "Irei usar oxigênio!";
  }

  function latir(): string
  {
    return 'au au';
  }

  function mamar()
  {
    return 'irei usar leite';
  }
}

$animal = new Cachorro();
echo $animal->respirar(), '<br>';
echo $animal->latir(), '<br>';
echo $animal->mamar(), '<br>';

echo '<br>';
var_dump($animal);
echo '<br>';
var_dump($animal instanceof Cachorro);
var_dump($animal instanceof Canino);
var_dump($animal instanceof Mamifero);
var_dump($animal instanceof Animal);
