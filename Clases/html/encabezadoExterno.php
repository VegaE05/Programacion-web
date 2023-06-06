<?php
class EncabezadoExterno{
    function template($tituloPagina){
?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="Clases/css/stylesEncabezado.css">
            <link rel="stylesheet" href="Clases/css/stylesPaginador.css">
        </head>
        <body>
            <header>
                <nav>
                    <ul>
                        <li><a href="?modulo=Inicio&controlador=Inicio&accion=index">INICIO</a></li>
                        <li><a href="?modulo=Crud&controlador=Crud&accion=index">CRUD</a></li>
                        <li><a href="">Controlador</a></li>
                        <li><a href="">Modelo</a></li>
                    </ul>
                </nav>
            </header>
        </body>
        </html>
<?php
    }
}
?>