<?php
require_once "Conexiones/ConexionBD.php";
class DatosPersonalesModelo{
    private $conexion,
            $status,
            $mensaje,  
            $lugarDeError,
            $datos,

            $clave,  
            $obtenerpor,
            $Id,
            $nombre,
            $edad,
            $telefono,
            $sexo,
            $correo;
    
    public function __CONSTRUCT()
    {
        try{
            $this->conexion = Conexion::IniciarConexion();
            $this->status = TRUE;
        }catch (Exception $e){
            $this->status = FALSE;
            $this->mensaje = 'Error al conectarse a la BD: '. $this->lugarDeError. 'codigo';
        }
        $this->lugarDeError='';
    }
    public function setStatus($status){$this->clave = $status;}
    public function getStatus(){return $this->status;}

    public function setMensaje($mensaje){$this->clave = $mensaje;}
    public function getMensaje(){return $this->mensaje;}

    public function setLugarDeError($lugarDeError){$this->clave = $lugarDeError;}
    public function getLugarDeError(){return $this->lugarDeError;}


    public function setId ($Id){$this->Id = $Id;}
    public function getId(){return $this->Id;} 

    public function setNombre ($nombre){$this->nombre = $nombre;}
    public function getNombre(){return $this->nombre;}

    public function setEdad ($edad){$this->edad = $edad;}
    public function getEdad(){return $this->edad;}

    public function setTelefono ($telefono){$this->telefono = $telefono;}
    public function getTelefono(){return $this->telefono;}

    public function setSexo($sexo){$this->sexo = $sexo;}
    public function getSexo(){return $this->sexo;}

    public function setCorreo ($correo){$this->correo = $correo;}
    public function getSorreo(){return $this->correo;}
    
    public function obtenerDatos()
    {
        $this-> datos = (object) array('datos' => NULL);
        try{
            $sql = "SELECT * FROM datos";
            $consulta = $this->conexion->prepare($sql);
            $consulta->execute();
            $errores = $consulta->errorInfo();
            if ($errores[0]== 0000)
            {
                $this->status = TRUE;
                $this->datos = $consulta->fetchAll(PDO::FETCH_OBJ);
            }else{
                throw new Exception($errores[2]);
            }
        }
        catch (PDOException $e){
            $this->status = FALSE;
            $this->mensaje= 'Error al obtener la informacion: '. $this->lugarDeError. 'codigo'. $e->getCode() . 'Modelo linea'. $e->getLine();
        }
        catch (Exception $e)
        {
            $this->status=FALSE;
            $this->mensaje=$e->getMessage();
        }
        return $this->datos;
    }

    public function insertarDatos($Id, $nombre, $edad, $telefono, $sexo, $correo){
        try {
            $sql = "INSERT INTO datos (Id, nombre, edad, telefono) 
            VALUES (:Id, :nombre, :edad, :telefono)";
            $consulta = $this->conexion->prepare($sql);
            $consulta->bindParam(':Id', $Id);
            $consulta->bindParam(':nombre', $nombre);
            $consulta->bindParam(':edad', $edad);
            $consulta->bindParam(':telefono', $telefono);
            $consulta->bindParam(':sexo', $sexo);
            
            $consulta->execute();
            $errores = $consulta->errorInfo();
            if ($errores[0] == "00000") {
                $this->status = TRUE;
                $this->mensaje = "Datos insertados correctamente.";
            } else {
                throw new Exception($errores[2]);
            }
        } catch (PDOException $e) {
            $this->status = FALSE;
            $this->mensaje = 'Error al insertar los datos: ' . $e->getMessage() . ' en el modelo línea ' . $e->getLine();
        } catch (Exception $e) {
            $this->status = FALSE;
            $this->mensaje = $e->getMessage();
        }
    }

    public function actualizarDatos($Id, $nombre, $edad, $telefono, $sexo, $correo){
        try {
            $sql = "UPDATE datos SET nombre = :nombre, edad = :edad, telefono = :telefono , sexo = :sexo, correo = :correo WHERE Id = :Id";
            $consulta = $this->conexion->prepare($sql);
            $consulta->bindParam(':nombre', $nombre);
            $consulta->bindParam(':edad', $edad);
            $consulta->bindParam(':telefono', $telefono);
            $consulta->bindParam(':Id', $Id);
            $consulta->bindParam(':sexo', $sexo);
            $consulta->bindParam(':correo', $correo);
            $consulta->execute();
            $errores = $consulta->errorInfo();
            if ($errores[0] == "00000") {
                $this->status = TRUE;
                $this->mensaje = "Datos actualizados correctamente.";
            } else {
                throw new Exception($errores[2]);
            }
        } catch (PDOException $e) {
            $this->status = FALSE;
            $this->mensaje = 'Error al actualizar los datos: ' . $e->getMessage() . ' en el modelo línea ' . $e->getLine();
        } catch (Exception $e) {
            $this->status = FALSE;
            $this->mensaje = $e->getMessage();
        }
    }

    public function eliminarDatos($Id){
        try {
            $sql = "DELETE FROM datos WHERE Id = :Id";
            $consulta = $this->conexion->prepare($sql);
            $consulta->bindParam(':Id', $Id);
            $consulta->execute();
            $errores = $consulta->errorInfo();
            if ($errores[0] == "00000") {
                $this->status = TRUE;
                $this->mensaje = "Registro eliminado correctamente.";
            } else {
                throw new Exception($errores[2]);
            }
        } catch (PDOException $e) {
            $this->status = FALSE;
            $this->mensaje = 'Error al eliminar el registro: ' . $e->getMessage() . ' en el modelo línea ' . $e->getLine();
        } catch (Exception $e) {
            $this->status = FALSE;
            $this->mensaje = $e->getMessage();
        }
    }
} 