<?php

require_once('src/Conta.php');

$primeiraConta = new Conta(new Titular('056.945.649-52', "Julho Michalak"));

$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarSaldo();
