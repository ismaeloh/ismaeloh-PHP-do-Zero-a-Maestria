<?php

if (is_int(5)) { // true
    echo "É um inteiro <br>";
}


if (is_int("Não é um inteiro")) { // false
    echo "É um inteiro <br>";
}

$a = 10;

if (is_int($a)) { // false
    echo "É um inteiro 3º <br>";
}
