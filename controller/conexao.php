<?php

class Conexao {
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "exemplo_aula_pw";
    private $conexao;

    public function __construct() {
        $this->conecxao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);

        if ($this->conecxao->connect_error) {
            die("falha na conexão: " . $this->conecxao->connect_error);
        }
    }

    public function getConexao(){
        return $this->conexao;
    }
}

?>