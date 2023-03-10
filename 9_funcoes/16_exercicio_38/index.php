<?php


$itens = ["arroz", "feijão", "tomate", "cebola"];

function compras($arr)
{

  $str = "Você levou estes itens do mercado: ";

  for ($i = 0; $i < count($arr); $i++) {
    if ($i + 1 == count($arr)) {
      $str .= "$arr[$i].";
    } else {
      $str .= "$arr[$i], ";
    }
  }

  return $str;
}

echo compras($itens);
