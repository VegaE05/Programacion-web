<?php
class Pagina{
    private $tipoPagina='externa';
    private $tituloPagina;
    private $mensaje;
    private $tipoMensaje;
    private $mensajeNoHayDatos;
    
    public function setMensaje($mensaje,$tipoMensaje='error'){
        $this->mensaje=(strcmp(trim($mensaje),trim($this->mensaje))!==0)?$this->mensaje .''. $mensaje:$this->mensaje;
        $this->tipoMensaje=$tipoMensaje;
    } 

    public function setMensajeNoHayDatos($mensajeNoHayDatos){
        $this->mensajeNoHayDatos=$mensajeNoHayDatos;
    } 

    public function getMensajeNoHayDatos(){
        return $this->mensajeNoHayDatos;
    }
    
    public function __CONSTRUCT($tituloPagina,$tipoPagina='externa'){
        $this->tipoPagina=$tipoPagina;
        $this->tituloPagina=$tituloPagina;
        if($this->tipoPagina=='externa'){
            if(session_status()!==PHP_SESSION_ACTIVE){
                session_name('Proyecto');
                session_start();
            } 
        }
    }

    function inicializaEncabezado($ruta,$datosEncabezado=null){
        include_once "$ruta";
        if($this->tipoPagina=='externa'){
            (new EncabezadoExterno())->template($this->tituloPagina,$datosEncabezado);
        }else{
            (new EncabezadoExterno())->template($this->tituloPagina,$datosEncabezado);

        }
    }

    function inicializaPie($ruta){
        include_once "$ruta";
        if($this->tipoPagina='externa'){
            (new PieExterno())->template($this->mensaje,$this->tipoMensaje,$this->mensajeNoHayDatos);
        }else{
            (new PieExterno())->template();

        }
    }
}
?>