<?php
class pelisModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=pelisplus;charset=utf8', 'root', '');
        
    } 
    
    function getPelis(){
<<<<<<< HEAD

        $sentencia = $this->db->prepare('SELECT * FROM peliculas');
=======
        $db = new PDO('mysql:host=localhost;dbname=pelisplus;charset=tuf8', 'root', '');
        $sentencia = $db->prepare(' SELECT * FROM peliculas ');
>>>>>>> d5989c4e837db83e45b3183bb8c914168b0b0808
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
    function conseguirUnaPelicula($id){
        $sentencia = $this->db->prepare('SELECT * FROM peliculas WHERE ID = ?');
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
