<?php

$frase = "carro - navio - helicóptero - barco - jangada";

$fraseArray = explode("-", $frase);

for ($i = 0; $i < count($fraseArray); $i++) {
  echo "$fraseArray[$i] <br>";
}
