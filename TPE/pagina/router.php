<?php

require_once 'controller/pelis.controller.php';
require_once 'controller/director.controller.php';



define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//inicio las clases
//que opinas de instanciar los controladores dentro de los casos del switch piraaa
$pelisController=new pelisController();
$directorController = new DirectorController();


//accion por defecto

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}


$id= 6;
$params = explode('/', $action);
switch ($params[0]) {
    case "home":
        $pelisController->showPelis();
        $directorController -> showdirectors();     
    break;
    case "detallesPeli":/*["detallesPeli/", $id]  */
        $id = $params[1];
        $pelisController->getOnePelicula($id);
        
    break;
    case "peliculasDeEstosDirectores":
        $id = $params[1];
        $directorController -> conseguirPeliculasConEseDirector($id);
/*     case 'getingopelis':
        $pelisController->showPelisInfo($id);
   
    case "getdirectorpelis":  
    $pelisController ->showPelis($director);
    break; */
    
    default: 
        echo('404');

    require_once "templates/login.phtml";
    break;
}