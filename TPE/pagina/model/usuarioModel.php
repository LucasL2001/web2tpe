<?php

class usuarioModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=pelisplus;charset=utf8', 'root', '');
    } 

    function conseguirUsuarioPorNombreDeUsuario($usuario){
        $sentencia = $this->db->prepare('SELECT * FROM usuarios WHERE Nombre = ?');
        $sentencia->execute(array($usuario));
        $usuario = $sentencia->fetch(PDO::FETCH_OBJ);
        return $usuario;
    }
}