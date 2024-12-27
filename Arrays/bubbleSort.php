<?php

     // bubble sort

     // teste de mesa

    // Temos o array com um contador da posição atual = 0 e o array da próxima posição que é zero também

    //fazemos um for da posição atual e verificamos se ele é igual a quantidade do array -1

    $numeros = [54, 26, 93, 17, 77, 31, 44, 55, 20];
    
    for($atualValor = 0; $atualValor < count($numeros) - 1; $atualValor++) {
        for ($proximoValor=0; $proximoValor < count($numeros) - $atualValor -1; $proximoValor++) { 
            if($numeros[$atualValor] > $numeros[$proximoValor + 1]) {

                // variável auxiliar para gravar o valor que está sendo iterado e substituir pelo valor trocado

                $salvaValorAtual = $numeros[$atualVaproximo];
                $numeros[$proximoValor] = $numeros[$proximoValor + 1];
                $numeros[$proximoValor + 1] = $salvaValorAtual;
            }
        }
    }

    print_r($numeros);

?>