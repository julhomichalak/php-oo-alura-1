<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Funcionario\Gerente;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Gerente(
    'João da Silva',
    new CPF('123.456.789-10'),
    10000
);

$autenticador->tentaLogin($umDiretor, '4321');
