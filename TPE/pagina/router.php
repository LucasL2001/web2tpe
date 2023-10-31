<?php

require_once 'controller/pelis.controller.php';
require_once 'controller/director.controller.php';
require_once 'controller/authController.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//inicio las clases
$pelisController=new pelisController();
$directorController = new DirectorController();
$authController = new authController();



// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}



$params = explode('/', $action);
switch ($params[0]) {
    case "home"://// muestra todas las peliculas
        $pelisController->showPelis();
    break;

    case "directores"://// muestra los directores
        $directorController -> showdirectors();
        break;

    case "detallesPelicula":/*["detallesPeli/", $id]  */
        $id = $params[1];
        $pelisController->getOnePelicula($id);
    break;

    case "peliculasDeEstosDirectores":////trae y muestra las peliculas de un director en espesifico
        $id = $params[1];
        $directorController -> conseguirPeliculasConEseDirector($id);
        break;
    
    case "eliminapelicula":////delete peliculas
        $ID= $_POST['eliminar'];
        $pelisController->deletePelicula($ID);
        break;
    
    case "login":////muestra el login
        $authController->mostrarForm();
        break;

    case "validacion":////valida el usuario
        $authController->validacionDeUsuario();
        break;

    case "logout"://// desloguea el user
        $authController->logout();
        break;
    
    default: 
        echo('es defaul');
        break;
}