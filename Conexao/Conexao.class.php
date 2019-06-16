<?php
//Classe de Conexão com Banco de Dados.
class Conexao{
    //Atributos privados.
    private $usuario;
    private $senha;
    private $banco;
    private $servidor;
    private static $pdo;

    //Construtor.
    public function __cosnstruct(){
        $this->servidor = "localhost";
        $this->banco = "db_topfitness";
        $this->usuario = "root";
        $this->senha = "root";
    }

    //Metodo para conectar.
    public function conectar(){
        try{
            if(is_null(self::$pdo)){
                self::$pdo = new PDO("mysql:host=".$this->servidor.";dbname=".$this->banco, $this->usuario, $this->senha);
            }
            return self::$pdo;
        }catch(PDOException $e){
            echo 'Error: '.$e->getMessage();                
        }
    }

}
?>