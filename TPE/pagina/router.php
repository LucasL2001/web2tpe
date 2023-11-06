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

    case "muestraaddpelicula":
        $pelisController->mustraAdd();
        break;

    case "addpelicula":////preeguntar a leo como se puede hacer 
        ////dice que la clave foranea no existe
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $genero = $_POST['genero'];
        $clasificacion_edad = $_POST['edad'];
        $director= "nn";
        $ID_director= 111;
        $pelisController -> addPelicula($nombre, $descripcion, $genero, $clasificacion_edad,$director ,$ID_director);
        break;
    
    case "eliminapelicula":////delete peliculas
        $id = $params[1];
        $pelisController->deletePelicula($id);
        break;

    case "eliminadirector":////eliminaDirector
        $id = $params[1];
        $directorController->deleteDirector($id);
        break;
    
    case "editarpelicula": ////muestra update pelicula
        $id = $params[1];
        $pelisController-> mostrarUpdate($id);
        break;
        
    case "updatePelicula":////update pelicula
        $id = $params[1];
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $genero= $_POST["genero"];
        $edad = $_POST["edad"];
        $id_director= $params[2];
        $pelisController->updatePelicula($nombre, $descripcion,$genero, $edad,$id_director,$id);
        break;
            
            
    case "editardirector": ////mustra updateDirectores
        $id = $params[1];
        $directorController-> mostrarUpdate($id);
        break;

    case "updateDirectores":////update director
        $director = $_POST["director"];
        $apellido = $_POST["apellido"];
        $edad= $_POST["edad"];
        $premios = $_POST["premios"];
        $exitos= $_POST["mayorExito"];
        $id = $params[1];
        $directorController->updateDirector($director, $apellido,$edad, $premios,$exitos,$id);
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