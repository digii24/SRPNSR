<?php 
    require_once 'model/usuarioModel.php';

class LoginController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Usuario();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/login.php';
        require_once 'view/footer.php';
    }
    
    public function Validacion(){
        $va = new Usuario();
        $this->model->Validar($va);
        $prueba;
    }
    
}