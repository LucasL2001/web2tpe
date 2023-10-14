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
}