<?php

class Car
{

  public $rodas;
  public $aro = 20;
  public $cor = "Vermelha";

  function ligar()
  {
    echo "Vruuummmm <br>";
  }
}

$ferrari = new Car;

$ferrari->rodas = 4;

echo $ferrari->aro . "<br>";
echo $ferrari->rodas . "<br>";

$ferrari->cor = "Azul";

echo $ferrari->cor . "<br>";

$ferrari->ligar();
