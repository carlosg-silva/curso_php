<?php

$a = "5" * 12;

$tipo = gettype($a);

echo $tipo;
echo "<br>";
echo gettype([]);
echo "<br>";
echo gettype("olá");
echo "<br>";
echo gettype(12.5);
