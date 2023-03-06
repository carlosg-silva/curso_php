<?php

$x = 12;

switch ($x) {
  case 0:
    echo "X é igual a 0 <br>";
    break;
  case 1:
    echo "X é igual a 1 <br>";
    break;
  default:
    echo "X não é igual a nenhum dos valores mencionados <br>";
}

$y = "";

switch ($y) {
  case "Carlos":
    echo "O nome é Carlos <br>";
    break;
  case "João":
    echo "O nome é João <br>";
    break;
  default:
    echo "O nome não foi encontrado <br>";
}
