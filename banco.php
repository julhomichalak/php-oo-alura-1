<?php

require_once('src/Conta.php');

$primeiraConta = new Conta();

$primeiraConta->depositar(500);
$primeiraConta->sacar(300);
$primeiraConta->defineCPFTitular('056.945.649-52');

echo $primeiraConta->recuperarSaldo();
echo $primeiraConta->recuperarCPF();
