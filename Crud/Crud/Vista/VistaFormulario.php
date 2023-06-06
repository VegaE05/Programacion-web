<?php
include_once "Crud/Crud/Modelo/DatosPersonalesModelo.php";

class Formulario
{
    public function template()
    {
        ?>
        <!DOCTYPE html>
        <html>

        <head>

            <title>Formulario</title>
        
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        </head>

        <body>
            <div class="container mt-4">
                <h2>FORMULARIO</h2> 
                
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" id="crear-tab" data-toggle="tab" href="#crear">Crear</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="actualizar-tab" data-toggle="tab" href="#actualizar">Actualizar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="eliminar-tab" data-toggle="tab" href="#eliminar">Eliminar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="buscar-tab" data-toggle="tab" href="#buscar">Buscar</a>
                    </li>
                </ul>
                <div class="tab-content mt-4">
                    <div class="tab-pane fade show active" id="crear">
                        <form action="?modulo=Crud&controlador=Crud&accion=index&tipo=crear" method="POST" autocomplete="off">
                            <div class="form-group">
                                <label for="Id">ID:</label>
                                <input type="int" class="form-control" id="Id" name="Id"
                                    placeholder="Ingrese ID">
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    placeholder="Ingrese el nombre">
                            </div>
                            <div class="form-group">
                                <label for="edad">Edad:</label>
                                <input type="int" class="form-control" id="edad" name="edad"
                                    placeholder="Ingrese la edad">
                            </div>
                            <div class="form-group">
                                <label for="telefono">Telefono:</label>
                                <input type="int" class="form-control" id="telefono" name="telefono"
                                    placeholder="Ingrese el telefono">
                            </div>
                            <div class="form-group">
                                <label for="telefono">Sexo:</label>
                                <input type="int" class="form-control" id="sexo" name="sexo"
                                    placeholder="Ingrese el sexo">
                            </div>
                            <div class="form-group">
                                <label for="telefono">Correo:</label>
                                <input type="int" class="form-control" id="correo" name="correo"
                                    placeholder="Ingrese el correo">
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="actualizar">
                        <form action="?modulo=Crud&controlador=Crud&accion=index&tipo=actualizar" method="POST" autocomplete="off">
                        <div class="form-group">
                                <label for="Id">ID:</label>
                                <input type="int" class="form-control" id="Id" name="Id"
                                    placeholder="Ingrese el ID">
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    placeholder="Ingrese el nombre">
                            </div>
                            <div class="form-group">
                                <label for="edad">Edad:</label>
                                <input type="text" class="form-control" id="edad" name="edad"
                                    placeholder="Ingrese la edad">
                            </div>
                            <div class="form-group">
                                <label for="telefono">Telefono:</label>
                                <input type="text" class="form-control" id="telefono" name="telefono"
                                    placeholder="Ingrese el telefono">
                                    </div>
                            <div class="form-group">
                                <label for="telefono">Sexo:</label>
                                <input type="int" class="form-control" id="sexo" name="sexo"
                                    placeholder="Ingrese el sexo">
                            </div>
                            <div class="form-group">
                                <label for="telefono">Correo:</label>
                                <input type="int" class="form-control" id="correo" name="correo"
                                    placeholder="Ingrese el correo">
                            </div>
                            <button type="submit" class="btn btn-success">Actualizar</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="eliminar">
                        <form action="?modulo=Crud&controlador=Crud&accion=index&tipo=eliminar" method="POST" autocomplete="off">
                        <div class="form-group">
                                <label for="Id">ID:</label>
                                <input type="text" class="form-control" id="Id" name="Id"
                                    placeholder="Ingrese el Id">
                            </div>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="buscar">
                        <form action="?modulo=Inicio&controlador=Inicio&accion=index" method="POST" autocomplete="off">
                            <button type="submit" class="btn btn-secondary">Buscar</button>
                        </form>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.14.7/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        </body>

        </html>
        <?php
    }
}
?>