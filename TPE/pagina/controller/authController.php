<?php 

require_once 'model/usuarioModel.php';
require_once 'view/authView.php';

class authController{
    private $view;
    private $model;
/*     private $auth;
 */
    function __construct() {
        $this->model = new usuarioModel();
        $this->view = new AuthView();
       /*  $this->auth = new AuthHelper(); */
    }

    function mostrarForm(){
        $this->view->mostrarForm();
    }

    function validacionDeUsuario(){
        $usuario = $_POST['NomubreUser'];
        $contrasenia = $_POST['Password'];

        $usuario = $this->model->conseguirUsuarioPorNombreDeUsuario($usuario);  

        if ($usuario && password_verify($contrasenia, $usuario->contrasenia)) {
            session_start();
            $_SESSION['USER_ID'] = $usuario->id;
            $_SESSION['USER_EMAIL'] = $usuario->mail;
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