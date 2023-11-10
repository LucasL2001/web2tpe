<?php

class pelisView{

    function __construct()
    {
        
    }


    function sideindex(){
        
    }

    function muestraPelis($peliculas){
        require  "templates/muestrapelis.phtml";
    }

    function muestrainfopelis($info){
        require 'templates/muestrainfopelis.phtml';
    }
    
    function muestraDetallesDePelicula($pelicula){
        require 'templates/detallePelicula.phtml';
    }


    function mostrarUpdate($peliculas = null, $director){
        include_once "templates/updatePelicula.phtml";
    }

    function mustraAdd($directores){
        include_once "templates/addpelicula.phtml";
    }

    function muestraerror($error){
        include_once "templates/muestraError.phtml";
    }
}