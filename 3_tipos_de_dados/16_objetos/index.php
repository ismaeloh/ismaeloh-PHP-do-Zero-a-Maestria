<?php

class Pessoa
{
    function falar()
    {
        echo "Olá pessoal!";
    }
}

$ismael = new Pessoa();

$ismael->nome = "Ismael";

echo $ismael->nome;

echo "<br>";

$ismael->falar();
