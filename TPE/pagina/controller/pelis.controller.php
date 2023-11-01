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


    function updatePelicula($nombre, $descripcion, $genero, $clasificacion_edad, $ID_director, $id){

    if(!empty($nombre)&&!empty($descripcion)&&!empty($genero)&&!empty($clasificacion_edad)&&!empty($director)&&!empty($ID_director)){
        $this-> pelisModel -> update($nombre, $descripcion, $genero, $clasificacion_edad,0, $ID_director, $id);
        }
    }

    function addPelicula($nombre, $descripcion, $genero, $clasificacion_edad, $ID_director, $id){
        if(!empty($nombre)&&!empty($descripcion)&&!empty($genero)&&!empty($clasificacion_edad)&&!empty($director)&&!empty($ID_director)){
            $this-> pelisModel -> addPelicula($nombre, $descripcion, $genero, $clasificacion_edad,0, $ID_director, $id);
            }
    }


    function mostrarUpdate($id){
        $this->pelisView-> mostrarUpdate($id);
    }

}