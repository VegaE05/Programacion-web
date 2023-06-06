<?php
include_once "Inicio/Inicio/Vista/Vistainicio.php";
include_once "Inicio/Inicio/Modelo/DatosPersonalesModelo.php";
include_once "Clases/pagina.php";

class InicioControlador{
    private $modelo,$datos,$error,$pagina;
    
    public function __CONSTRUCT(){
        $this->modelo=new DatosPersonalesModelo();
        $this->pagina=new Pagina("Inicio");
        if(isset($error)&&$error!=''){
            $this->pagina->setMensaje($error);
        } 
        
    }

    public function setError($error){
        $this->error=$error;
    } 

    Public function index(){
        $this->pagina->inicializaEncabezado("Clases/html/encabezadoExterno.php");
       if ($this->modelo->getStatus()){
        $datos=$this->modelo->obtenerDatos();
        if ($this->modelo->getStatus()){
            $vista=new Inicio();
            $vista->template($datos);
        }else{
            echo $this->modelo->getMensaje();
        }
       }else{
        echo $this->modelo->getMensaje();
       }
       $this->pagina->setMensaje($this->error);
       $this->pagina->inicializaPie("Clases/html/pieExterno.php");
    }    
}
?>