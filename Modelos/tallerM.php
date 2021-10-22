<?php
require_once "conexionBD.php";
class TallerM extends ConexionBD{
    static public function registrarProveedor($datosC, $tablaBD){
        $pdo = ConexionBD::cBD()->prepare("INSERT INTO 'proveedor`(`proveedor_nombre`, `proveedor_direccion`, `proveedor_telefono`, `proveedor_telefono2`, `proveedor_correo_e`) VALUES (:nombre, :direccion, :tel1, :tel2, :correo)");
        $pdo -> bindParam(":nombre", $datosC["nom_proveedor"], PDO::PARAM_STR);
        $pdo -> bindParam(":direccion", $datosC["direccion"], PDO::PARAM_STR);
        $pdo -> bindParam(":tel1", $datosC["tel1"], PDO::PARAM_STR);
        $pdo -> bindParam(":tel2", $datosC["tel2"], PDO::PARAM_STR);
        $pdo -> bindParam(":correo", $datosC["correo"], PDO::PARAM_STR);
        if($pdo -> execute()){
            return "Bien";
        }else{
            return "Error";
        }
        $pdo -> close();
    }
}
?>