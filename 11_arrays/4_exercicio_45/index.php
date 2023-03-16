<?php

$arr = range(10, 45);

$arrSoma = [];
for ($i = 0; $i < count($arr); $i++) {
  $arrSoma = $arr[$i] + 6;

  if ($arrSoma <= 30) {
    echo "$arrSoma <br>";
  } else {
    echo "$arrSoma é um número muito alto <br>";
  }
}
