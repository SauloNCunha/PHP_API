<?php
    class Conexao{
        private $usuario = "";
        private $senha = "";
        private $caminho = "";
        private $banco = "";
        private $con;

        public function __construct()
        {
            $this->con = mysql_connect($this->caminho, $this->usuario, $this->senha) 
                or die("Conexao com o banco de dados Falhu!".mysql_error($this->con));

                mysql_select_db($this-> con, $this->banco) or die("Conexao com o banco Falhou".mysql_error($this->con));
            
        }

        public function getCon(){
            return $this->con;
        }
    }

?>