<?php
// Fecha de inicio y fin del evento (esto ya no se usa porque luego lo metí como arrays para meter más de un evento)
$fechaInicio = '2023-06-23 23:59:00';
$fechaFin = '2023-06-24 02:35:00';
$nombreEvento='Noche de San Juan';
$descripcionEvento ='Hoguera de la noche más corta del año y dazas trivales en torno a una fogata.';
$lugarEvento="Playa de poniente";


//Listado de fiestas de Gijón
$eventos=[
    [
    'titulo'=>     'Noche de San Juan',
    'inicio'=>      '2023-06-23 23:59:00',
    'fin'=>         '2023-06-24 03:00:00',
    'descripcion'=> 'Noche más corta del año con hoguera',
    'lugar'=>       'Playa de Poniente, Gijón'
    ],
    [
    'titulo'=>     'Fiestas de Begoña',
    'inicio'=>      '2023-06-23 23:59:00',
    'fin'=>         '2023-06-24 03:00:00',
    'descripcion'=> 'Noche más corta del año con hoguera',
    'lugar'=>       'Playa de Poniente'
    ]
];



// Función para formatear la fecha y hora en el formato requerido por el archivo ICS
function formatearFecha($fecha) {
    return date('Ymd\THis', strtotime($fecha));
}

function construirICS($valor){
 global $eventos;

// Generar contenido del archivo .ICS
$contenidoICS = "BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//Dicampus//CalendarGenerator//ES
BEGIN:VEVENT
DTSTART:" .formatearFecha($eventos[$valor]['inicio'])."
DTEND:" .formatearFecha($eventos[$valor]['fin'])."
SUMMARY:". $eventos[$valor]['titulo']."
DESCRIPTION: ".$eventos[$valor]['descripcion']."
LOCATION: ".$eventos[$valor]['lugar']."
END:VEVENT
END:VCALENDAR
";


// Imprimir el contenido del archivo .ICS
echo $contenidoICS;

}
//lanzar archivo .ics
construirICS(0);
//construirICS(1);

// Encabezados para descargar el archivo
header('Content-Type: text/calendar; charset=utf-8');
header('Content-Disposition: attachment; filename=evento555.ics');
?>
