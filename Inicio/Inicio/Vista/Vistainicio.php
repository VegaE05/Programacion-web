<?php
class Inicio {
    public function template($datos) {
        $personasPorPagina = 1;
        $totalPersonas = count($datos);
        $totalPaginas = ceil($totalPersonas / $personasPorPagina);

        if (!isset($_GET['pagina']) || $_GET['pagina'] < 1 || $_GET['pagina'] > $totalPaginas) {
            $paginaActual = 1;
        } else {
            $paginaActual = $_GET['pagina'];
        }

        $indiceInicial = ($paginaActual - 1) * $personasPorPagina;
        $indiceFinal = $indiceInicial + $personasPorPagina;
        $personasPagina = array_slice($datos, $indiceInicial, $personasPorPagina);

        echo "<div class='datos'>";
        echo "<h2>Prueba de la BD</h2>";
        foreach ($personasPagina as $persona) {
            echo "<div class='persona'>";
            echo "<p><strong>ID:</strong> " . $persona->Id . "</p>";
            echo "<p><strong>Nombre:</strong> " . $persona->nombre . "</p>";
            echo "<p><strong>Edad:</strong> " . $persona->edad . "</p>";
            echo "<p><strong>Teléfono:</strong> " . $persona->telefono . "</p>";
            echo "<p><strong>Teléfono:</strong> " . $persona->sexo . "</p>";
            echo "<p><strong>Teléfono:</strong> " . $persona->correo . "</p>";
            echo "</div>";
        }
        echo "</div>";

        // Mostrar botones de paginación
        echo "<div class='paginacion'>";
        if ($totalPaginas > 1) {
            if ($paginaActual > 1) {
                echo "<a class='boton' href='?modulo=Inicio&controlador=Inicio&accion=index&pagina=" . ($paginaActual - 1) . "'>Anterior</a> ";
            }
            for ($i = 1; $i <= $totalPaginas; $i++) {
                if ($i == $paginaActual) {
                    echo "<strong class='pagina-actual'>$i</strong> ";
                } else {
                    echo "<a class='boton' href='?modulo=Inicio&controlador=Inicio&accion=index&pagina=$i'>$i</a> ";
                }
            }
            if ($paginaActual < $totalPaginas) {
                echo "<a class='boton' href='?modulo=Inicio&controlador=Inicio&accion=index&pagina=" . ($paginaActual + 1) . "'>Siguiente</a>";
            }
        }
        echo "</div>";
    }    
}
?>