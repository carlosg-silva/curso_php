<?php

$arr = [
  [1, 2, 3, 4],
  ["maçã", "uva", "abacate", "manga"],
  [10, 20, 30, 40]
];

// loop no array externo
for ($i = 0; $i < count($arr); $i++) {
  // Imprimindo array 
  echo "Imprimindo array externo: " . ($i + 1) . "<br>";

  // Imprimindo o array interno
  for ($j = 0; $j < count($arr[$i]); $j++) {

    echo $arr[$i][$j] . "<br>";
  }
}
