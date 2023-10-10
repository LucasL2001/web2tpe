<?php

include_once 'model/pelis.model.php';
include_once 'view/pelis.view.php';
class pelisController{
    private $pelisModel;
    private $pelisView;

    function __construct()
    {
        $this->pelisModel = new pelisModel();
        $this->pelisView = new pelisView();
    }

    function showPelis(){
        $peliculas=$this-> pelisModel->getPelis();
        $this->pelisView -> muestraPelis($peliculas);
    }


    function showPelisDirector($director){
        $peliculas=$this-> pelisModel->getDirectorespelis($director);
        $this->pelisView ->muestraPelis($peliculas);
    }



}