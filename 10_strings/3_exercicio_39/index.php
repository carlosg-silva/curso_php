<?php

$arr = [
  'porta' => 100,
  'maçanete' => 5,
  'motor' => 2000,
  'retrovisor' => 8
];

function intensCaros($arr)
{

  $arrItensCaros = [];

  foreach ($arr as $item => $preco) {
    if ($preco > 10) {
      array_push($arrItensCaros, $item);
    }
  }
  return $arrItensCaros;
}

$novoArr = intensCaros($arr);

print_r($novoArr);
