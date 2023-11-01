<?php

include_once 'model/pelis.model.php';
include_once 'view/pelis.view.php';
include_once 'helpers/authHelper.php';


class pelisController{
    private $auth;
    private $pelisModel;
    private $pelisView;

    function __construct()
    {
        $this-> auth= new authHelper();
        $this->pelisModel = new pelisModel();
        $this->pelisView = new pelisView();
    }

    function showPelis(){
        $peliculas=$this->pelisModel->getPeliculas();
        $this->pelisView->muestraPelis($peliculas);
    }

    function getOnePelicula($idPelicula){
        $pelicula=$this->pelisModel->conseguirUnaPelicula($idPelicula);
        $this->pelisView->muestraDetallesDePelicula($pelicula);
    }
    function showPelisInfo($id){
        $pelisInfo = $this -> pelisModel-> getPeliculas($id);
        $this -> pelisView -> muestrainfopelis($pelisInfo);
    }

    function showPelisDirector($director){
        $peliculas=$this-> pelisModel->getDirectorespelis($director);
        $this->pelisView ->muestraPelis($peliculas);
    }


    //utilizar el helper para el ABM desde aca
    function deletePelicula($ID){
        $this->pelisModel ->delete($ID);
    }


    function updatePelicula($nombre, $descripcion, $genero, $clasificacion_edad, $nombreDirector, $id){

        
        if(!empty($nombre)&&!empty($descripcion)&&!empty($genero)&&!empty($clasificacion_edad)&&!empty($director)&&!empty($nombreDirector)){
            
            
            $pelisList = $this->pelisModel -> getPeliculas();
            foreach($pelisList as $p){  
                if($p->Director == $nombreDirector){
                    
                }
            }
            
            
            
            
            
            
            $this-> pelisModel -> update($nombre, $descripcion, $genero, $clasificacion_edad,0, $ID_director, $id);
        }
    }

}