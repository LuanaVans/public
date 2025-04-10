<?php
// Fecha de inicio y fin del evento 
$fechaIni = '2023-06-24 00:00:00';
$fechaFin = '2023-06-24 02:35:00';
$nombreEvento='Noche de San Juan';
$descripcionEvento ='Hoguera de la noche más corta del año y dazas trivales en torno a una fogata.';
$lugarEvento="Playa de poniente";


// Función para formatear la fecha y hora en el formato requerido por el archivo ICS
function formatearFecha($fecha) {
    return date('Ymd\THis', strtotime($fecha));
}

// Generar contenido del archivo .ICS
$contenidoICS = "BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//Dicampus//CalendarGenerator//ES
BEGIN:VEVENT
DTSTART:" .$fechaIni."
DTEND:" .$fechaFin."
SUMMARY:". $nombreEvento."
DESCRIPTION: ".$descripcionEvento."
LOCATION: ".$lugarEvento."
END:VEVENT
END:VCALENDAR
";

// Imprimir el contenido del archivo .ICS
echo $contenidoICS;

}

// Encabezados para descargar el archivo
header('Content-Type: text/calendar; charset=utf-8');
header('Content-Disposition: attachment; filename=evento001.ics');

?>
