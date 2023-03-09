<?php

function tipoNumero($num)
{

  if (is_int($num) === false) {
    echo "Digite um número inteiro <br>";
  } else if ($num % 2 === 0) {
    echo "O número $num é par. <br>";
  } else {
    echo "O número $num é ímpar. <br>";
  }
}

tipoNumero(10);
tipoNumero("abc");
tipoNumero(5);
tipoNumero(true);
tipoNumero(50);
tipoNumero([]);
tipoNumero(21);
tipoNumero(12);
