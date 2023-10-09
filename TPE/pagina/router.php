<?php

require_once 'controller/pelis.controller.php';
require_once "controller/director.controller.php";



define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//inicio las clases
$pelisController=new pelisController();
$directorControler = new directorController();


//accion por defecto

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}



$params = explode('/', $action);
switch ($params[0]) {
    case 'getpelis':
        $pelisController->showPelis();
    break;

    case "getdirectorpelis":  
    $pelisController ->showPelis($director);
    break;
    
    default: 
        require_once "templates/login.phtml";
        break;
}