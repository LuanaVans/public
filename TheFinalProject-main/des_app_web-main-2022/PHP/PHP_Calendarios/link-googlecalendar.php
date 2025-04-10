<h1>Link a Google Calendar</h1>

<?php
// Detalles del evento
$tituloEvento = 'Mi evento Ejemplo 001';
$descripcionEvento = 'Descripción del evento aquí';
$ubicacionEvento = 'Gijón';
$fechaInicio = '20230620T100000';
$fechaFin = '20230620T120000';

// Codificar los detalles del evento para incluirlos en la URL
$tituloCodificado = urlencode($tituloEvento);
$descripcionCodificada = urlencode($descripcionEvento);
$ubicacionCodificada = urlencode($ubicacionEvento);
$fechaInicioCodificada = urlencode($fechaInicio);
$fechaFinCodificada = urlencode($fechaFin);

// Generar la URL de Google Calendar
$urlGoogleCalendar = "https://calendar.google.com/calendar/render?action=TEMPLATE&text={$tituloCodificado}&details={$descripcionCodificada}&location={$ubicacionCodificada}&dates={$fechaInicioCodificada}/{$fechaFinCodificada}";

// Imprimir la URL de Google Calendar
echo "<a href='$urlGoogleCalendar' target='_blank'>Añadir a Google Calendar</a>";

//header("Location:$urlGoogleCalendar");

?>