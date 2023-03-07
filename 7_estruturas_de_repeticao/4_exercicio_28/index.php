<?php

$a = 4;
$b = 30;

while ($a <= $b) {
  echo $a . "<br>";
  if ($a == 24) {
    break;
  }
  $a += 2;
}
