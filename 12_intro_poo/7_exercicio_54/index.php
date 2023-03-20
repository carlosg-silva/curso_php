<?php


class Pessoa
{
  public $nome;
  public $idade;

  function andar($m)
  {
    echo "A pessoa andou $m metros <br>";
  }
}

$carlos = new Pessoa;

$carlos->nome = "Carlos";
$carlos->idade = 30;

echo "Ele se chama $carlos->nome e tem $carlos->idade anos <br>";

$carlos->andar(15);

$joao = new Pessoa;

$joao->nome = "João";
$joao->idade = 32;

echo "Ele se chama $joao->nome e tem $joao->idade anos <br>";
