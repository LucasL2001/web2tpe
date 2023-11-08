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


    function inneryoin($id){
        $querry= $this-> db -> prepare('SELECT * FROM peliculas INNER JOIN directores ON peliculas.id_director = directores.id_director WHERE directores.id_director = ?' );
        $querry -> execute(array($id));
        $retornado = $querry -> fetchAll(PDO::FETCH_OBJ);

        return $retornado;
    }

    
    function addDirector($director, $apellido, $edad, $premios, $mayorexito){
        $sentencia = $this-> db->prepare(' INSERT INTO directores(Director, Apellido, Edad, Premios, MayorExito) VALUES (?,?,?,?,?) ');
        $sentencia->execute(array($director, $apellido, $edad, $premios, $mayorexito));
        header("Location: " . BASE_URL. "directores");
    }


    function delete($id){//// la clave foranea se esta usando por eso no se puedo borrar pregintar a LEOOOO
        $query = $this->db->prepare('DELETE FROM directores WHERE id_director =?');
        $query->execute(array($id));
        header("Location: " . BASE_URL. "directores");
    }


    function update($director, $apellido, $edad, $premios, $mayorexito, $id){
        $query = $this->db->prepare('UPDATE directores SET Director =?, Apellido=?, Edad=?, Premios=?, MayorExito=? WHERE id_director =?');
        $query->execute(array($director, $apellido, $edad, $premios, $mayorexito, $id));
        header("Location: " . BASE_URL. "directores");
    }
}