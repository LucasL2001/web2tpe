<?php
class pelisModel{
    private $db;
<<<<<<< HEAD
    function __construct(){
       
=======
    function __contruct(){
>>>>>>> df02d038eb35679fa82a0b03c08773b1256da98d
        $this->db = new PDO('mysql:host=localhost;'.'dbname=pelisplus;charset=utf8', 'root', '');
        
    } 
    
    function getPelis(){
        try{
            var_dump("hola");
             $sentencia = $this->db->prepare('SELECT * FROM peliculas');
        $sentencia->execute();
        $peliculas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        foreach($peliculas as $pelis){
            $query =$db->prepare('SELECT * FROM directores');
            $query->execute();
            $peliculas = $query->fetchAll(PDO::FETCH_OBJ);
            var_dump($peliculas);

     }
        
    }
    catch ( PDOException $e ) {
        var_dump("ERROR!");
        var_dump( $e );
    } 
<<<<<<< HEAD
}
   

} 
=======
    }
    
    function getDirectorespelis($director){
        try{
            $sentencia = $this->db->prepare("SELECT FROM peliculas WHERE direcor = $director");
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
>>>>>>> df02d038eb35679fa82a0b03c08773b1256da98d
