<?php
class Conexion{
    public static function IniciarConexion(){
        $conexion=new PDO("mysql:host=127.0.0.1;dbname=l20371035;charset=utf8", "l20371035", "VRE35*it94");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexion;
    }
}
?>