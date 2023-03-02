<?php

class Pessoa
{

  function falar()
  {
    echo "Olá pessoal!";
  }
}

$carlos = new Pessoa();

$carlos->nome = "Carlos";

echo $carlos->nome;

echo "<br>";

$carlos->falar();
