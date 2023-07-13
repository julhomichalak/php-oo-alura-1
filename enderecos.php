<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Guarapuava', 'santana', 'rotary', '713');
$outroEndereco = new Endereco('Rio', 'centro', 'avenida', '50');


echo $umEndereco->cidade;

echo $umEndereco . PHP_EOL;
echo $outroEndereco;