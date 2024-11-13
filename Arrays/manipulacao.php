<?php 

$frutas = ['Laranja', 'Limão'];

array_push($frutas, 'Uva'); // adiciona o último item

var_dump($frutas);


array_shift($frutas); // exclui o primeiro

var_dump($frutas);



array_pop($frutas); // exlui o último;

var_dump($frutas);


$frutas[0] = "Abacaxi";
$frutas[1] = "Limão";

$legumes = ["Abobrinha", "beterraba"];


$comida = array_merge($frutas, $legumes);

var_dump($comida);



// Exercício Array array com 5 cidades e imprimir a terceira

$cidades = ["Rio de Janeiro", "Florianópolis", "São Paulo", "Salvador", "Minas Gerais"];

print_r('<br><br>'.  $cidades[2]);


// Array associativo chave é o nome dos alunos e o valor a idade

$alunos = ["Giuliano" => 27, "Gicele" => 69, "Julio" => 58];

echo PHP_EOL. $alunos["Gicele"];


// array com 3 cores, adicionar um no final do array, remover a primeira cor e imprimir

$cores = ['Vermelho', 'Azul', 'Verde'];

array_push($cores, 'Amarelo');

array_shift($cores);

var_dump($cores);

// array chamado $precos, chave o nome do produto e valor o preço
// atualizar o preço adicionando + 10
// Atualize o primeiro subtraindo -1
// imprime resultado

$precos = ['Feijao' => 5.78, 'Arroz' => 4.73, 'Massa' => 4.67];

$precos['Arroz'] += 10.0;
$precos['Feijao'] -= 1.00;

var_dump($precos);

?>