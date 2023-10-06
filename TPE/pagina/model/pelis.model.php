<?php
class pelisModel{
    private $db;
    function __contruct(){
       
        $this->db = new PDO('mysql:host=localhost;'.'dbname=pelisplus;charset=utf8', 'root', '');
    } 
    
    function getPelis(){
        try{
            var_dump("hola");
             $sentencia = $this->db->prepare('SELECT * FROM peliculas');
        $sentencia->execute();
        $peliculas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        var_dump($peliculas);
        
    }
    catch ( PDOException $e ) {
        var_dump("ERROR!");
        var_dump( $e );
    } 
}
    
} 