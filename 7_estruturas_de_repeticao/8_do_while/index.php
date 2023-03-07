<?php

$j = 0;

$teste = "Matheus <br>";

do {

  echo "testando do while $j <br>";

  if ($j == 2) {
    echo "$teste";
  }

  $j++;
} while ($j < 10);

$i = 10;

do {

  echo "Testando do while 2 $i <br>";
  if ($i == 2) {
    echo "$teste";
  }

  $i--;
} while ($i > 0);
