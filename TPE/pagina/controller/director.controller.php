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
    
    
        function updateDirector($director, $apellido, $edad, $premios, $matorextito, $id){
    
        if(!empty($apellido) && !empty($director) && !empty($edad) && !empty($premios) && !empty($matorextito)){
            $this-> model -> update($apellido, $director, $edad, $premios, $matorextito, $id);
            }
        }
    
        function addDirector($apellido, $director, $edad, $premios, $matorextito){
            if(!empty($director)&&!empty($apellido)&&!empty($edad)&&!empty($premios)&&!empty($matorextito)){
                $this-> model -> addDirector($apellido, $director, $edad, $premios, $matorextito);
                }
        }
    

}




