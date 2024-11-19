<?php

function divideValor($dividendo, $divisor) {

    try {

        if($divisor === 0) {

            throw new RangeException("O valor não pode ser dividido por zero");
        }

        echo "O resultaodo é ". $resultado = $dividendo/ $divisor;

    } catch (Exception $e) {
        
        echo $e->getMessage();

    } finally {

        echo "Tratando as exceções";
    }

}

?>