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
}