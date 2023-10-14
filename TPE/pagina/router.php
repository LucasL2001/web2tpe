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
    $action = 'home';
}

var_dump($action);
$id= 6;
$params = explode('/', $action);
switch ($params[0]) {
    case "home":
        $pelisController->showPelis();
        $directorController -> showdirectors();     
    break;
<<<<<<< HEAD
    case "detallesPeli":/*["detallesPeli/", $id]  */
        $id = $params[1];
        $pelisController->getOnePelicula($id);
        echo "<p>Estoy en la ruta de detalles de peliculas</p>";
        break;
/*     case 'getingopelis':
=======

    case 'getinfopelis':
>>>>>>> d5989c4e837db83e45b3183bb8c914168b0b0808
        $pelisController->showPelisInfo($id);
   
    case "getdirectorpelis":  
<<<<<<< HEAD
    $pelisController ->showPelis($director);
    break; */
=======
        $pelisController ->showPelis($director);
    break;
>>>>>>> d5989c4e837db83e45b3183bb8c914168b0b0808
    
    default: 
        echo('404');

    require_once "templates/login.phtml";
    break;
}