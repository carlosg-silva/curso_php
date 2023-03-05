<?php

$a = 1;
$b = "1";

if ($a != $b) {
  echo "A é diferente de B 1<br>";
}

if ($a !== $b) {
  echo "A é diferente de B 2<br>";
}

if (1 !== 2) {
  echo "Não é identico 1<br>";
}

if (1 !== "1") {
  echo "Não é identico 2<br>";
}

if ([] !== "abc") {
  echo "Não é identico 3<br>";
}
