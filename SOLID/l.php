<?php

// Segundo o princípio de substituição de liskov, a classe pessoa sendo a superclasse e
// a subclasse sendo sua classe extendida, é possível mesmo passando pessoa por parâmetro 
// substituir totalmente  asuperclasse sem alterar a função do sistema.

    class Pessoa {

        public function correr() {
            
            echo 'A pessoa está correndo';
        }
    }

    class Atleta Extends Pessoa {

        public function correr() {
            
            echo 'O atleta está correndo';
        }

    }

    function imprimeCorrida(Pessoa $pessoa) {

        return $pessoa->correr();
    }

    $pessoa = new Pessoa;
    $atleta = new Atleta;

    imprimeCorrida($pessoa);
    imprimeCorrida($atleta);

?>