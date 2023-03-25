<?php

abstract class Teste
{

  public static function testandoClass()
  {
    echo "Esta método é de uma classe abstrata <br>";
  }

  abstract public function testeAbs();
}

//$t = new Teste;

Teste::testandoClass();

class Nova extends Teste
{

  public function testeAbs()
  {
    echo "Teste método abstract <br>";
  }
}

$n = new Nova;
$n->testeAbs();
