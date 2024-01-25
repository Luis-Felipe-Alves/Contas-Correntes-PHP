<?php

$conta1 = [
    "titular"=> "Alberto",
    "saldo"=> 80000,
];

$conta2 = [
    "titular"=> "Luis",
    "saldo"=> 90000000000,
];

$conta3 = [
    "titular"=> "Maria",
    "saldo"=> 20000,
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . " tem o saldo de R$" . $contasCorrentes[$i]['saldo'] . PHP_EOL;
}

$enderecoUm = [
    'pais' => 'Brasil',
    'estado' => 'DF',
    'cidade' => 'Brasilia',
    'bairro' => 'Guara II',
    'quadra' => 'QE 12',    
];

$enderecos = [$enderecoUm];

echo $enderecos[0]['bairro'] . PHP_EOL;
echo gettype($enderecos) . PHP_EOL;
echo gettype($enderecos[0]) . PHP_EOL;
echo gettype($enderecoUm['pais']) . PHP_EOL;
