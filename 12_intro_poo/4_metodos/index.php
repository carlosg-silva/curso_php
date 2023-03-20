<?php

class Pessoa
{

  function falar()
  {
    echo "Olá, eu sou um objeto! <br>";
  }

  function somar($x, $y)
  {
    echo $x + $y . "<br>";
  }
}

$carlos = new Pessoa;

$carlos->falar();
$carlos->falar();

$joao = new Pessoa;

$joao->falar();

$carlos->somar(2, 2);

$joao->somar(10, 12);
