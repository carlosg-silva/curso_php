<?php

$nomes = ["Carlos", "João", "Matheus", "Maria"];

$a = 10;

foreach ($nomes as $nome) {
  echo "O nome do índice atual é $nome <br>";
  if ($nome == "João") {
    echo "Opa $a <br>";
  }
}
