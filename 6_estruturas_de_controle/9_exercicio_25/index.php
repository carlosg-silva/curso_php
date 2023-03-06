<?php

$a = 51;
$b = "teste";
$c = 21;
$d = "abcd";

if (is_int($a) || is_float($a)) {

  $a *= 2;

  if ($a > 100) {
    echo "Variável maior que 100 <br>";
  } else {
    echo "Variável menor que 100 <br>";
  }
} else {
  echo "Não é um número <br>";
}

if (is_int($b) || is_float($b)) {

  $b *= 2;

  if ($b > 100) {
    echo "Variável maior que 100 <br>";
  } else {
    echo "Variável menor que 100 <br>";
  }
} else {
  echo "Não é um número <br>";
}

if (is_int($c) || is_float($c)) {

  $c *= 2;

  if ($c > 100) {
    echo "Variável maior que 100 <br>";
  } else {
    echo "Variável menor que 100 <br>";
  }
} else {
  echo "Não é um número <br>";
}
