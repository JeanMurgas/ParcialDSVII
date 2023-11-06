<?php


class UserController{
    private $model;

    public function __construct()
    {
        require_once ("c://xampp/htdocs/ParcialKexyV2/model/UserModel.php");
        $this->model = new UserModel();
    }

public function guardarUsuario($email, $password){
    $email = $this->limpiarusuario($email);
    $password = $this->encryptar($this->limpiardata($password));
    $valor = $this->model->agregarNuevoUsuario($email, $password);
    return $valor;
}
public function limpiarusuario($email){
    $email = strip_tags($email);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $email = htmlspecialchars($email);
    return $email;
}

public function limpiardata($password){
    $password = strip_tags($password);
    $password = htmlspecialchars($password);
    return $password;
}

    public function encryptar($password){
        return password_hash($password, PASSWORD_DEFAULT);
       
    }
}


?>