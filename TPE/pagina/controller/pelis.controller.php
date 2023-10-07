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
        var_dump($peliculas);
    }



}