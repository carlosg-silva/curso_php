<?php

$veloc = 40;
$velocMax = 40;

if ($veloc < $velocMax) {
  echo "Você está na velocidade correta <br>";
} else if ($veloc == $velocMax) {
  echo "Limite atingido, atenção! <br>";
} else {
  echo "Você foi multado por excesso de velocidade! <br>";
}
