<?php

    require __DIR__. '/vendor/autoload.php';

    use Projetos\PhpProjetosEstudos\ContaBancaria;

    $conta = new ContaBancaria("Nu Pagamentos", "0001", "34355440-8", 3000.00);

    // $conta->setBanco("Nu Pagamentos");
    // $conta->setAgencia("0001");
    // $conta->setConta("34355440-8");
    
    var_dump($conta->exibeDetalhesConta());

?>