<?php

// São eventos que desviam o fluxo normal de um script durante a execução do sistema.

// InvalidArgumentException ocorre quando um tipo de variável é diferente da qu está sendo usada como input

function validaInteiro($int) {


    if(!is_int($int)) {

        throw new Exception ("O valor não é um inteiro");
    }
}

validaInteiro(int: 5.5);


// estrutura das excecões

// A classe Throwble é a interface que é implementada pela classe Exception, Error também implementa de Throwble
// Exception é dividida em RuntimeException e LogicException


?>