<?php

require_once("c://xampp/htdocs/ParcialKexyV2/config/database.php");

class UserModel{
    private $PDO;
    public function __construct()
    {
        
        $pdo = new db();
        $this->PDO = $pdo->conexion();
    }

    public function agregarNuevoUsuario($email, $password){
        $statement =$this->PDO->prepare("INSERT INTO users VALUES (null, :email, :password)");
        $statement->bindParam(":email", $email);
        $statement->bindParam("password", $password);
        return($statement->execute()) ? true : false;
    }
}

?>