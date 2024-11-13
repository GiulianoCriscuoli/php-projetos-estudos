<?php

// Princípio da responsabilidade única

// classe com responsabilidade única de acessar e modificar usuário

    class Usuario {

        public function setNome(Usuario $u){}
        public function getNome(){}

    }

// classe com responsabilidade única de manipular consultas de DB para usuários
    class UsuarioDb {

        public function add(Usuario $u){}
        public function update(Usuario $u){}
        public function delete($id){}

    } 
?>