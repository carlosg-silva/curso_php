<?php

$frase = "testando o case de uma palavra <br>";
$frase2 = "Testando o case de uma palavra <br>";
$frase3 = "Testando o case de uma palavra <br>";

// Primeira letra em maiúsculo
echo ucfirst($frase);
echo ucfirst($frase2);

// Todas as palávras com as iniciais maiúsculas

echo ucwords($frase3);
echo ucwords($frase2);
