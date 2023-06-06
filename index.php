<?php

if(isset($_GET['modulo'])){
    $modulo = $_GET['modulo'];
    if(isset($_GET['controlador'])){
        $controlador =  $_GET['controlador'];
        if(isset($_GET['accion'])){
            $accion = $_GET['accion']."<br>";
            $ruta = $modulo ."/".$controlador."/Controlador/".$controlador."Controlador.php";
           
            require_once $ruta;
            $nombreControlador = ucwords($controlador)."Controlador";
            $controlador = new $nombreControlador();
            if (!method_exists($controlador, $accion)){
                $error = 'No existe la accion '. $accion . 'en el controlador' .  $nombreControlador; 
                
                $controlador = 'Inicio'; 
                $controlador = ucwords($controlador). "Controlador";
                $controlador = new $nombreControlador();
                $accion = 'index';
                $controlador->$accion();
            }

        }else{
            $controlador->$accion();
        }
    }else{
        echo "No se encuentra controlador";
    }
}
else{
    echo "No se encuentra modulo";
}
?>