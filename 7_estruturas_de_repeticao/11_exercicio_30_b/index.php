<?php

$arr = [];
for ($i = 1; $i <= 10; $i++) {
  $a = array_push($arr, $i);

  print_r($a . "<br>");
}
