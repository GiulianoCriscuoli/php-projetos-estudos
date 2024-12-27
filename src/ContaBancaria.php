<?php


namespace Projetos\PhpProjetosEstudos;

abstract class ContaBancaria {

    protected $banco;
    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct($banco, $agencia, $conta, $saldo)
    {
        $this->banco   = $banco;
        $this->agencia = $agencia;
        $this->conta   = $conta;
        $this->saldo   = $saldo;
    }
    
    public function exibeDetalhesConta() : array {

        return  [
            'Banco'   => $this->banco,
            'Agência' => $this->agencia,
            'Conta'   => $this->conta,
            'Saldo'   => $this->saldo

        ];
    }

    public function sacar (float $valor) : float {

        return $this->saldo += - $valor;

    }

    public function depositar (float $valor) : float {

        return $this->saldo += + $valor;

    }

    public abstract function obterSaldo() : string;

    // public function setBanco(string $banco) : void {

    //     $this->banco = $banco;
    // }

    // public function getBanco() : string {

    //     return $this->banco;
    // }

    // public function setAgencia(string $agencia) : void {

    //     $this->agencia = $agencia;
    // }

    // public function getAgencia() : string { 

    //     return $this->agencia;
    // }

    // public function setConta(string $conta) : void {

    //     $this->conta = $conta;
    // }

    // public function getConta() : string {

    //     return $this->conta;
    // }

}
