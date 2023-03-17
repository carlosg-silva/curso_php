<?php

$raca = "Pastor";
$cor = "Capa Preta";
$idade = 3;
$sexo = "Fêmea";

$cachorro = compact("raca", "cor", "idade", "sexo");


foreach ($cachorro as $caracteristica => $valor) {
  echo "$caracteristica: $valor <br>";
};
