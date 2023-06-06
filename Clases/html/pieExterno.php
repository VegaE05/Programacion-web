<?php
class PieExterno{
    public function template($mensaje,$tipoMensaje,$mensajeNoHayDatos=''){
        if(isset($mensaje) && $mensaje !=''){
?>
            <div>
                <a href="#" class="close" data-dismiss="alert" aria-label="close">$times;</a>
                <strong>Error</strong> <?php echo $mensaje; ?>
            </div>

            <!-- Este div cierra el encabezado-->
            </div>
        <?php
        }?>

        <!-- Se cierra el body y el html del encabezado-->
        </body>
        </html>
        <style type="text/css">
            .myAlert-botton{
                position: fixed; bottom: 5px; left: 2%; width: 96%;
            }
        </style>
<?php
    } 
}
?>