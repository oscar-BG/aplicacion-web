<?php
class ConexionBD{
    static public function cBD(){
        // Base de datos = tallerbd
        $bd = new PDO("mysql:host=localhost;dbname=tallerbd","root","");
        return $bd;
    }
}
?>