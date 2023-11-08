<?php

class directoresView{


    function __construct()
    {
        
    }


    function muestraDirectors($directores){
        include "templates/directores.phtml";
    }

    function muestraPeliculasDeEseDirector($peliculasDeEseDirector){
        include "templates/listaDePeliculas.phtml";
    }


    function mostrarUpdate($id){
        include_once "templates/updateDirectores.phtml";
    }

    function muestraadddirecotres(){
        include_once "templates/adddirectores.phtml";
    }

    function muestraerror($error){
        include_once "templates/muestraError.phtml";
    }
}