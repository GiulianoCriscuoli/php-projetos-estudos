<?php


// isso viola o princípio aberto-fechado, pois vou ter que criar um elseif toda a vez que eu tiver um novo tipo de contrato 

    // class contratoClt {

    //     public function calcularSalario() {}

    // }

    // class Estagio {

    //     public function bolsaAuxilio() {}
    // }

    // class FolhaDePagamento {

    //     public function calcular($funcionario) {

    //         $salario = 0;

    //         if($funcionario instanceof contratoClt) {
    //             $salario = $funcionario->calcularSalario();
    //         } elseif($funcionario instanceof Estagio) {
    //             $salario = $funcionario->bolsaAuxilio();
    //         }

    //         return $salario;

    //     }
    // }


    // implementação correta seria criar uma interface, com o método remuneracao, pois podemos dentro da classe utilizar este método para fazermos os cálculos


    interface Remuneravel {
        public function remuneracao();
    }

    class Estagio  implements Remuneravel{

        public function remuneracao() {

            $salario = 850.0;
            $salario = $salario - ($salario * (5/100));

            return $salario;

        }
    }

    class Clt implements Remuneravel{

        public function remuneracao() {
            
            $salario = 2000.0;
            $salario = $salario - ($salario * (10/100));

            return $salario;
        }
    }

    class Pj implements Remuneravel {

        public function remuneracao() {

            $salario = 4000.0;
            $salario = $salario - ($salario * (15/100));

            return $salario;

        }
    }

    class FolhaDePagamento {

        public function calcular(Remuneravel $funcionario) {

            return $funcionario->remuneracao();
        }
    }

    $folha = new FolhaDePagamento;
    $estagio = new Estagio;
    $clt = new Clt;
    $pj = new Pj;

    echo $folha->calcular($estagio) ."\n";
    echo $folha->calcular($clt) ."\n";
    echo $folha->calcular($pj) ."\n";

?>