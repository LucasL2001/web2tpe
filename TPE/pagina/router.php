<?php

require_once 'controller/pelis.controller.php';
require_once 'controller/director.controller.php';
require_once 'controller/authController.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//inicio las clases
//que opinas de instanciar los controladores dentro de los casos del switch piraaa



//accion por defecto

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}



$params = explode('/', $action);
switch ($params[0]) {
    case "home":
        $pelisController=new pelisController();
        $directorController = new DirectorController();
        $pelisController->showPelis();
        $directorController -> showdirectors();     
    break;
    case "detallesPeli":/*["detallesPeli/", $id]  */
        $pelisController=new pelisController();
        $id = $params[1];
        $pelisController->getOnePelicula($id);
        
    break;
    case "peliculasDeEstosDirectores":
        $directorController = new DirectorController();
        $id = $params[1];
        $directorController -> conseguirPeliculasConEseDirector($id);

        break;
    case "login":
        $authController = new authController();
        $authController->mostrarForm();
        break;

    case "validacion":
        $authController = new authController();
        $authController->validacionDeUsuario();

        break;
    case "logout":
        $authController = new authController();
        $authController->logout();
        break;
    default: 
        echo('404');

        break;
}