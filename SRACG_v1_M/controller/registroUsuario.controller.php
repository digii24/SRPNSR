<?php
    require_once 'model/usuarioModel.php';
    
class RegistroUsuarioController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Usuario();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/usuario/registroUsuario.php';
        require_once 'view/footer.php';

    }   
    
    public function Guardar(){
        $alm = new Usuario();
        
        $alm->Nombre = $_REQUEST['nombre'];
        $alm->Apellido = $_REQUEST['apellidos'];
        $alm->Contrasena = $_REQUEST['contra'];
        $alm->Email = $_REQUEST['email'];
        $alm->Pais = $_REQUEST['pais'];
        $alm->Sexo = $_REQUEST['sexo'];
        $alm->Telefono = $_REQUEST['tel'];
//        $this->model->Obtener($_REQUEST['id'])?
//            $this->model->Actualizar($alm):
            $this->model->Registrar($alm);
    }
     public function Validar(Usuario $resultado) {
        
    if(isset($_POST["registrar"])){
    
    try {
        
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM USUARIOS WHERE CORREO_ELECT= :email AND CONTRASENA= :contra";
        //$sql = "CALL MOSTRAR_USUARIO()";
        $resultado = $base->prepare($sql);
        $login = htmlentities(addslashes($_POST["email"]));
        $password = htmlentities(addslashes($_POST["contra"]));
        $resultado->bindValue(":email", $login);
        $resultado->bindValue(":contra", $password);
        $resultado->execute();
        $numero_registro = $resultado->rowCount();
        
        
        if($numero_registro != 0){
            
           // echo "<h2>Adelante</h2>";
           session_start();
           $_SESSION["usuario"] = $_POST["email"];
           //header("Location:usuarios_registrados1.php");
           
        } else {
            
            //header("location:login.php");
            echo "Error usuario o contraseña incorrecta";
     
        }
        
    } catch (Exception $ex) {
        die ("Error" . $ex->getMessage);
    }
    }

    }
    
//    
//    public function Editar(){
//        $alm = new Usuario();
//        
//        if(isset($_REQUEST['id'])){
//            $alm = $this->model->Obtener($_REQUEST['id']);
//        }
//        
//        require_once 'view/header.php';
//        require_once 'view/alumno/alumno-editar.php';
//        require_once 'view/footer.php';
//    }
//    
//   
    
}