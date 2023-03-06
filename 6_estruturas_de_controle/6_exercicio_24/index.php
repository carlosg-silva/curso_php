<?php

$str = "teste";
$int = 12;
$bool = true;

if (is_int($str)) {
  echo "A variável é um inteiro 1<br>";
} else {
  echo "A variável não é um inteiro 1<br>";
}

if (is_int($int)) {
  echo "A variável é um inteiro 2<br>";
} else {
  echo "A variável não é um inteiro 2<br>";
}

if (is_int($bool)) {
  echo "A variável é um inteiro 3<br>";
} else {
  echo "A variável não é um inteiro 3<br>";
}
