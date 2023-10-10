<?php
require_once "model/directores.model.php";
require_once "view/directores.view.php";

class directorController{
    private $model = new directoresModel();
    private $view = new directoresView();

    function __construct()
    {
        
    }


}