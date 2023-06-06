<?php
include_once "Crud/Crud/Vista/VistaFormulario.php";
include_once "Crud/Crud/Modelo/DatosPersonalesModelo.php";
include_once "Clases/pagina.php";

class CrudControlador
{
    private $modelo;
    private $pagina;
    private $datos;

    public function __construct()
    {
        $this->modelo= new DatosPersonalesModelo();
        $this->pagina = new pagina("Mi pagina");
    }

    public function index()
    {
        $this->pagina->inicializaEncabezado("Clases/html/encabezadoExterno.php");
        $vista = new Formulario();
        $vista->template();

        // Obtener el tipo de formulario
        if (isset($_GET['tipo'])) {
            $tipo = $_GET['tipo'];
            // Ejecutar la acción correspondiente según el tipo de formulario
            switch ($tipo) {
                case 'crear':
                    $this->Insertar();
                    break;
                case 'actualizar':
                    $this->Actualizar();
                    break;
                case 'eliminar':
                    $this->Eliminar();
                    break;
                default:
                    $this->index();
                    break;
            }
        }
    }
    public function Insertar()
    {
        $Id = $_POST['Id'];
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $telefono = $_POST['telefono'];
        $sexo = $_POST ['sexo'];
        $correo = $_POST ['correo'];
        $this->modelo->insertarDatos($Id, $nombre, $edad, $telefono, $sexo, $correo);
        echo $nombre . " fue agregado correctamente";
    }

    public function Actualizar()
    {
        $Id = $_POST['Id'];
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $telefono = $_POST['telefono'];
        $sexo = $_POST ['sexo'];
        $correo = $_POST ['correo'];
        $this->modelo->actualizarDatos($Id, $nombre,$edad, $telefono, $sexo, $correo);
        echo $nombre . " fue actualizado correctamente";
    }

    public function Eliminar()
    {
        $Id = $_POST['Id'];
        $this->modelo->eliminarDatos($Id);
        echo "El registro " . $Id . " fue eliminado exitosamente";
    }
}
?>