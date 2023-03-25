<?php

class Humano
{
  public function falar()
  {
    echo "Olá";
  }
}

$carlos = new Humano;

$teste = 10;

if (is_object($carlos)) {
  echo "É um objeto <br>";
} else {
  echo "Não é um objeto <br>";
}

if (is_object($teste)) {
  echo "É um objeto <br>";
} else {
  echo "Não é um objeto <br>";
}

echo get_class($carlos) . "<br>";

if (method_exists($carlos, "falar")) {
  echo "Método existe <br>";
} else {
  echo "Método não existe <br>";
}

if (method_exists($carlos, "asd")) {
  echo "Método existe <br>";
} else {
  echo "Método não existe <br>";
}
