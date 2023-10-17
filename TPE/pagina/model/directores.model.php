<?php

class directoresModel{
    private $db;

    function __construct(){
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
    function conseguirPeliculasConEseDirectorDb($id){
        $sentencia = $this->db->prepare('SELECT * FROM directores WHERE id_director = ?');
        $sentencia -> execute(array($id));
        $director = $sentencia->fetchAll(PDO::FETCH_OBJ);
        foreach ($director as $pelicula) {
            $sentencia = $this->db->prepare('SELECT * FROM peliculas WHERE id_director = ?');
            $sentencia->execute(array($pelicula->id_director));
            $director = $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
        return $director;
    }

    
    
}