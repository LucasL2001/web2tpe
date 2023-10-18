<?php 

require_once 'model/usuarioModel.php';
require_once 'view/authView.php';
require_once 'helpers/authHelper.php';

class authController{
    private $view;
    private $model;


    function __construct() {
        $this->model = new usuarioModel();
        $this->view = new AuthView();
   
    }

    function mostrarForm(){
        $this->view->mostrarForm();
    }
    

    function validacionDeUsuario(){
       $usuario = $_POST['usuario'];
        $contrasenia = $_POST['contrasenia'];
        $usuarioo = $this->model->conseguirUsuarioPorNombreDeUsuario($usuario); 
 
        if (isset($usuarioo) && password_verify($contrasenia, $usuarioo->clave)) {
          
            session_start();
            $_SESSION['USER_ID'] = $usuarioo->ID;
            $_SESSION['USER_NAME'] = $usuarioo->nombre;
            $_SESSION['IS_LOGGED'] = true;
            header("Location: " . BASE_URL);
        }else{
            
            $this->view->mostrarForm("El usuario o la contraseña no existe");
        } 
        
      

        
    }
  
    

    public function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
    
}   