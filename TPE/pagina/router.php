<?php

require_once './controller/pelis.controller.php';
require_once './model/pelis.model.php';
require_once './view/pelis.view.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//inicio las clases


//accion por defecto

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}





$params = explode('/', $action);

switch ($params[0]) {

    
    default: 
        require_once "./index.php";
        break;
}