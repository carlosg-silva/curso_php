<?php

class Cachorro
{
  function latir()
  {
    echo "Latindo! <br>";
  }

  function andar($m)
  {
    echo "Andou $m metros! <br>";
  }
}

$dog1 = new Cachorro;
$dog2 = new Cachorro;

$dog1->latir();
$dog2->latir();

$dog1->andar(30);
$dog2->andar(18);
