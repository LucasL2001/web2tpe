<?php
require_once "model/directores.model.php";
require_once "view/director.view.php";
class DirectorController{

    private  $model;
    private $view;

    function __construct()
    {
        $this->model = new directoresModel();
        $this->view = new directoresView();
    }


    function showdirectors(){
        $directores = $this-> model->getDirectores();
        $this->view -> muestraDirectors($directores);
    }

}




