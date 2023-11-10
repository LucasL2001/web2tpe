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
            $comparativa = $this-> model -> inneryoin($ID);
            if( empty($comparativa)){
                $this->model ->delete($ID);
            }else{
                $error = "el director esta siendo usado";
                $this-> view -> muestraerror($error);
            }
            
        }
    
    
        function updateDirector($director, $apellido, $edad, $premios, $matorextito, $id){
    
        if(!empty($apellido) && !empty($director) && !empty($edad) && !empty($premios) && !empty($matorextito)){
            $this-> model -> update($apellido, $director, $edad, $premios, $matorextito, $id);
            }else{
                $error = "alguno de los valores no esta cargado";
                $this-> view -> muestraerror($error);
            }
        }
    

        function muestraadddirecotres(){
            $this->view->muestraadddirecotres();
        }


        function addDirector($apellido, $director, $edad, $premios, $matorextito){
            
            
            if(!empty($director)&&!empty($apellido)&&!empty($edad)&&!empty($premios)&&!empty($matorextito)){

                $this-> model -> addDirector($director,$apellido, $edad, $premios, $matorextito);
                }else{
                    $error = "alguno de los valores no esta cargado";
                    $this-> view -> muestraerror($error);
                }
        }
    

}




