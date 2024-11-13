<?php

    interface DBconnection {
        public function connection();
    }

    class MySqlConnection implements DBconnection {

        public function connection(){}
    }

    class OracleConnection implements DBconnection {

        public function connection(){}

    }

    class UsuarioDAO {
        private $db;

        public function __construct(DBconnection $dbC)
        {
            $this->db =  $dbC;
        }

    }

    $msql = new MySqlConnection();
    $usuario = new UsuarioDAO($msql);

?>