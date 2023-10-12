<?php

require_once 'controller/pelis.controller.php';
require_once 'controller/director.controller.php';



define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//inicio las clases
$pelisController=new pelisController();
$directorController = new DirectorController();


//accion por defecto

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'getpelis';
}

var_dump($action);

$params = explode('/', $action);
switch ($params[0]) {
    case "index":
        $directorController -> showdirectors();
    break;

    case 'getpelis':
        $pelisController->showPelis();
    break;

    case 'getingopelis':
        $pelisController->showPelisInfo($id);

    case "getdirectorpelis":  
    $pelisController ->showPelis($director);
    break;
    
    default: 
        echo('404');

    require_once "templates/login.phtml";
    break;
}