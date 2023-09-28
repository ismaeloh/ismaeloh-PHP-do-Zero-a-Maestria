<?php

$pessoa = [
    'nome' => 'Ismael',
    'idade' => 41,
    'profissao' => 'Detetive',
    'graduacao' => 'Polícia Espacial'
];

print_r($pessoa);
echo "<br>";

$maioridade = 18;

// desafio
if ($pessoa['idade'] >= $maioridade) {
    echo "A pessoa é maior de idade!";
}
