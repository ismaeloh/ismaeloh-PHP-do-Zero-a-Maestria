<?php

$carro = [
    'marca' => 'Renault',
    'portas' => 4,
    'teto solar' => true,
    'cor' => 'bege'
];

print_r($carro);
echo "<br>";
$marca = $carro['marca'];
echo "<br>";
$cor = $carro['cor'];
echo "<br>";
echo "O carro é da marca $marca e tem a cor $cor";
