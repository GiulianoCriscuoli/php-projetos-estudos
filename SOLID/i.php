<?php

    // Princípio de segregação de interface 

    // Criando uma interface extendida para utilizarmos nas classes e dividir de acordo com o uso delas 

    interface Ave {
        public function getAlt();
        public function render();

    }

    interface AvesVoam extends Ave {
        public function setAlt();

    }

    class Papagaio implements AvesVoam {

        public function setAlt(){}
        public function getAlt(){}
        public function render(){}

    }

    Class Aguia implements AvesVoam {

        public function setAlt(){}
        public function getAlt(){}
        public function render(){}
    }

    Class Pinguim implements Ave {

        public function getAlt(){}
        public function render(){}

    }

?>