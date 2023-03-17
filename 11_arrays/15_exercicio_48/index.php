<?php
// REMOVER PERA E FEIJAO
$arr = ["batata", "maçã", "pera", "feijão", "arroz"];

$remov = array_splice($arr, 2, 2);

print_r($arr);
echo "<br>";

// ITENS REMOVIDOS
print_r($remov);
