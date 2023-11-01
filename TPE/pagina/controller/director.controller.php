<?php
require_once "model/directores.model.php";
require_once "view/director.view.php";
include_once 'helpers/authHelper.php';

class DirectorController{
    private $auth;
    private  $model;
    private $view;

    function __construct()
    {
        $this-> auth= new authHelper();
        $this->model = new directoresModel();  
        $this->view = new directoresView();
    }


    function showdirectors(){
        $directores = $this-> model->getDirectores();
        $this->view -> muestraDirectors($directores);
    }
    function conseguirPeliculasConEseDirector($id){
        $peliculasConEsteDirector = $this-> model->conseguirPeliculasConEseDirectorDb($id);
        $this->view->muestraPeliculasDeEseDirector($peliculasConEsteDirector);
    }

    function mostrarUpdate($id){
        $this->view-> mostrarUpdate($id);
    }



        //utilizar el helper para el ABM desde aca
        function deleteDirector($ID){
            $this->model ->delete($ID);
        }
    
    
        function updateDirector($nombre, $descripcion, $genero, $clasificacion_edad, $ID_director, $id){
    
        if(!empty($nombre)&&!empty($descripcion)&&!empty($genero)&&!empty($clasificacion_edad)&&!empty($director)&&!empty($ID_director)){
            $this-> model -> update($nombre, $descripcion, $genero, $clasificacion_edad,0, $ID_director, $id);
            }
        }
    
        function addDirector($nombre, $descripcion, $genero, $clasificacion_edad, $ID_director, $id){
            if(!empty($nombre)&&!empty($descripcion)&&!empty($genero)&&!empty($clasificacion_edad)&&!empty($director)&&!empty($ID_director)){
                $this-> model -> addDirector($nombre, $descripcion, $genero, $clasificacion_edad,0, $ID_director, $id);
                }
        }
    

}




