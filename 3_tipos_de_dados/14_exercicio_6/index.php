<?php

$carro = ['modelo' => 'Sedan', 'marca' => 'Chevrolet', 'cor' => 'Prata', 'motor' => '2.0'];

print_r($carro);
echo "<br>";
echo $carro['modelo'];
echo "<br>";
echo $carro['cor'];
echo "<br>";

$modelo = $carro['modelo'];
$marca = $carro['marca'];

echo "O carro modelo $modelo é da marca $marca.";
