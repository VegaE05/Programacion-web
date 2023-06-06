const listadoDOM=document.querySelector('#listado');
const botonAtrasDOM=document.querySelector('#atras');
const informacionPaginasDOM=document.querySelector('#informacion-pagina');
const botonSiguienteDOM=document.querySelector('#siguiente');
const elementosPorPagina=1;
var datosSalida;
var registrosTotales;
var paginaActual=1;

function avanzarPagina(){
    paginaActual=paginaActual+1;
    leerRegistros(paginaActual,elementosPorPagina);
}

function retrocederPagina(){
    paginaActual=paginaActual-1;
    leerRegistros(paginaActual,elementosPorPagina);
}

function calcularPaginasTotales(registrosTotales){
    paginasTotales=Math.ceil(registrosTotales/elementosPorPagina);
    return paginasTotales
}