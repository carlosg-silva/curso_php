<?php

$frase = "Cadê o meu queijo? Ele estava aqui em cima";

$queijo = substr($frase, 12, 6);
$estava = substr($frase, 24, 6);

echo $queijo . "<br>";
echo $estava;
