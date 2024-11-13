<?php


// Resultado da tabuada de 5

$n = 5;
$i = 1;

while($i < 11) {

    echo "Resultado de $n x $i: ". $n * $i; 
    $i++;
}

$a = 1;
$i = 1;


// soma dos números de 1 a 20

$soma = 0;
while($i < 21) {

    echo "Resultado da soma: ". $soma += $i;
    
    $i++;

}

// escreva de 1 a 10 com for


for($contador = 1; $contador <= 10; $contador++) {

    echo $contador;
}

// Resultado dos produtos do array

$valores = [1, 2, 3, 6, 5, 3];
$soma = 0;

foreach($valores as $valor) {

    $soma += $valor;
}

echo "soma: ". $soma;