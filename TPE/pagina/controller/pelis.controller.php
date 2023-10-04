<?php

include_once './model/pelis.model.php';
include_once './view/pelis.view.php';
class pelisController{
    private $pelisModel;
    private $pelisView;

    function __construct()
    {
        $this->pelisModel = new pelisModel();
        $this->pelisView = new pelisView();
    }

    function showPelis(){
        $this -> pelisView -> muestraPelis($this-> pelisModel->getPelis());
    }



}