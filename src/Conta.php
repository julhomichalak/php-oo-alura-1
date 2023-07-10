<?php

class Conta
{
    private string $cpfTitualar;
    private string $nomeTitular;
    private float $saldo = 0;


    public function sacar(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function defineCPFTitular(string $cpf): void
    {
        $this->cpfTitualar = $cpf;
    }


    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperarCPF(): float
    {
        return $this->cpfTitualar;
    }
    
}
