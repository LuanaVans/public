<?php
const DEBUG = true;

const DATA =[
    'sitetitle' => 'Titulo de la web', 
    'sitename' => 'Nombre de la web',
    'sitelogo' => 'Sitio de la web',
    'siteurl' => '',
    'siteurl' => 'URL_ADDRESS:8000',
    'siteemail' => 'EMAIL_ADDRESS',
    'sitedescription' => 'Descripcion de la web',
    'sitekeywords' => 'Palabras clave de la web',
    'sitedate' => '2023-01-01',
    'siteauthor' => 'Autor de la web',
    'sitecopyright' => 'Copyright de la web',
];

// Conexión a base de datos
const HOST  = "localhost";
const USER = "root";
const PASS = "root";
const DBNA = "testeo";



/**
 * Función para ejecutar una consulta SQL y devolver los resultados en un array asociativo.
 * En caso de error, devuelve un array con un mensaje de error.
 *
 * @param string $sql_query Consulta SQL a ejecutar.
 * @return array Resultados de la consulta en formato asociativo o un array con un error.
 */
function consulta($sql_query): array {
    try {
        // Conectar a la base de datos
        $conn = mysqli_connect(HOST, USER, PASS, DBNA);

        // Verificar si la conexión ha fallado
        if (!$conn) {
            throw new Exception("Conexión fallida: " . mysqli_connect_error());
        }

        // Ejecutar la consulta SQL
        $result = mysqli_query($conn, $sql_query);
        
        // Si la consulta falla, lanzar una excepción con el mensaje de error
        if (!$result) {
            throw new Exception("Error en la consulta: " . mysqli_error($conn));
        }

        // Obtener todos los resultados en un array asociativo
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

        // Cerrar la conexión a la base de datos
        mysqli_close($conn);

        // Retornar los datos obtenidos
        return $data;
    } catch (Exception $e) {
        // En caso de error, devolver un array con el mensaje de error
        return ["error" => $e->getMessage()];
    }
}

// Ejecutar la consulta para obtener los datos de la tabla "lista"
$datos = consulta("SELECT * FROM lista");

// Verificar si la consulta devolvió un error
if (isset($datos["error"])) {
    echo "Error: " . $datos["error"];
} else {
    // Mostrar los datos en una lista HTML si la consulta fue exitosa
    echo "<ul>";
    foreach ($datos as $i) {
        echo "<li>{$i["id"]} - {$i["nombre"]}</li>";
    }
    echo "</ul>";
}




// Debug
function debug($input, $wrap = true) {
    if (DEBUG) {
        $html = '';
        if (is_string($input)) {
            $html = htmlspecialchars($input);
        } else {
            ob_start();
            print_r($input);
            $html = ob_get_clean();
        }
        // Si queremos que se envuelva en un 
        if ($wrap) {
            $html = "<pre class='debug'>" . $html . "</pre>";
        }
        echo $html;
    }
}