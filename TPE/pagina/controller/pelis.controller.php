<?php

include_once 'model/pelis.model.php';
include_once 'view/pelis.view.php';
include_once 'helpers/authHelper.php';


class pelisController{
    private $pelisModel;
    private $pelisView;

    function __construct()
    {

        $this->pelisModel = new pelisModel();
        $this->pelisView = new pelisView();
    }

    function showPelis(){
        $peliculas=$this-> pelisModel->getPeliculas();
        $this->pelisView -> muestraPelis($peliculas);
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


}