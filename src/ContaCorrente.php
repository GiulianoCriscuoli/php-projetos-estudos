<?php

namespace Projetos\PhpProjetosEstudos;

use Projetos\PhpProjetosEstudos\ContaBancaria;

class ContaCorrente extends ContaBancaria {


    const TAXA = 25;
    const TIPO_CONTA = "Conta Corrente";

    public function __construct (
    
        string $banco,
        string $agencia,
        string $conta,
        float  $saldo
    
    ) {
        parent::__construct($banco, $agencia, $conta, $saldo);
    }
    
    public function obterSaldo() : string {

        return "Seu saldo é: ". $this->saldo . " e o seu tipo de conta é: " . self::TIPO_CONTA;

    }

}