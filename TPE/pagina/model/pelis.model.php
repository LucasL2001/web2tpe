<?php
class pelisModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=pelisplus;charset=utf8', 'root', '');
        
    } 
    
    function getPelis(){

        $sentencia = $this->db->prepare('SELECT * FROM peliculas');
        $sentencia->execute();
        $peliculas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $peliculas;
    }
    function Showpelis($id){
        $db = new PDO('mysql:host=localhost;dbname=pelisplus;charset=tuf8', 'root', '');
        $query = $db -> prepare("SELECT FROM peliculas WHERE ID = $id");
        
        $query -> execute();
    
        $info= $query ->fetchAll(PDO::FETCH_OBJ);
    
        return $info;
    }
    function conseguirUnaPelicula($id) {
        $sentencia = $this->db->prepare('SELECT peliculas.*, directores.Director 
            FROM peliculas 
            JOIN directores ON peliculas.id_director = directores.id_director
            WHERE peliculas.ID = ?');
        $sentencia->execute([$id]);
        $pelicula = $sentencia->fetch(PDO::FETCH_OBJ);
        return $pelicula;
    }
    
    
    function getDirectorespelis($director){
        try{
            $sentencia = $this->db->prepare("SELECT FROM peliculas WHERE Direcor = $director");
            $sentencia -> execute();
            $pelis = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $pelis;
        }
        catch ( PDOException $e ) {
            var_dump("ERROR!");
            var_dump( $e );
        } 
    } 

}
