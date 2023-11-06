<?php

class Db{

    private $host="localhost:33532";
    private $dbname ="bdds7";
    private $user = "root";
    private $password = "";

    public function conexion(){
        try{
            $PDO = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user,$this->password);
            return $PDO;
    }catch(PDOException $e){
        return $e->getMessage();
}
    }
}  

