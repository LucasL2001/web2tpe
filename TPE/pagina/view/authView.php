<?php

class authView{


    //$error = null es un parametro opcional
    function mostrarForm($error = null){
        include "templates/login.phtml";
    }
}