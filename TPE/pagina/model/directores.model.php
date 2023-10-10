<?php

class directoresModel{
    private $db;
    function __contruct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=pelisplus;charset=utf8', 'root', '');
    } 
    
    function getDirectores(){
        try{
            $sentencia = $this->db->prepare('SELECT * FROM directores');
            $sentencia -> execute();
            $directores = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $directores;
    }
    catch ( PDOException $e ) {
        var_dump("ERROR!");
        var_dump( $e );
    } 
    
    }


    
    
}