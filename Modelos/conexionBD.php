<?php
class ConexionBD{
    static public function cBD(){
        $bd = new PDO("mysql:host=localhost;dbname=tallerbd","root","");
        return $bd;
    }
}
?>