<?php

$idade = 15;
$maiorIdade = 18;
$msgMaior = "O usuário é maior de idade";
$msgMenor = "O usuário é menor de idade";

if ($idade >= $maiorIdade) {
  echo $msgMaior;
} else {
  echo $msgMenor;
}
