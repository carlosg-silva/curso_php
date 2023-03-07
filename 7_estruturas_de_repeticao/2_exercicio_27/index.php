<?php

$arr = ["Carlos", 10, true, 25, "Kaue", 6, "Robson", "Carro", false, "Ana"];

$x = count($arr);
$y = 0;

while ($y < $x) {

  if (is_string($arr[$y])) {
    echo $arr[$y] . "<br>";
  }

  $y++;
}
