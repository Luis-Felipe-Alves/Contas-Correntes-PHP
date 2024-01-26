<?php

$contasCorrentes = [
    
    '12345678910' => [
        "titular" => "Alberto",
        "saldo" => 80000,    
    ],

    '12345678911' => [
        "titular" => "Luis",
        "saldo" => 90000000000,
    ],

    '12345678912' => [
        "titular" => "Maria",
        "saldo" => 20000,
    ]
];

foreach($contasCorrentes as $cpf => $pessoa){
    echo 'O CPF '. $cpf . ' pertence ao titular ' . $pessoa['titular'] . PHP_EOL;
    echo 'Seu saldo é ' . $pessoa['saldo'] . PHP_EOL;
}

//Forma alternativa de organizar as contas:

$conta1 = [
    "titular" => "Alberto",
    "saldo" => 80000,    
];

$conta2 = [
    "titular" => "Luis",
    "saldo" => 90000000000,
];

$conta3 = [
    "titular" => "Maria",
    "saldo" => 20000,
];

$todasAsContas = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($todasAsContas); $i++){
    echo $todasAsContas[$i]['titular'] . ' possui R$' . $todasAsContas[$i]['saldo'] . PHP_EOL;
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
