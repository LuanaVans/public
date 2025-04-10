<?php
// Obtener los datos enviados desde el formulario y almacenarlos en un array multidimensional llamado "datos"
$columnas = [
    ["producto", "text", "producto"],
    ["precio", "text", "precio"],
    ["foto", "text", "foto"],
    ["codigo", "number", "codigo"],
    ["marca", "text", "marca"],
    ["descripcion", "text", "descripcion"],
    ["categoria", "text", "categoria"],
    ["stock_ini", "number", "stock_ini"],
    ["entradas", "number", "entradas"],
    ["salidas", "number", "salidas"],
    ["total", "number", "total"],
    ["animal", "text", "animal"],
    ["tamano", "text", "tamano"],
    ["uni_med", "text", "uni_med"],
    ["valor_unidad", "text", "valor_unidad"],
    ["activo", "text", "activo"]
];


/// ---------------------------------------------------------------------

//Array temporal para almacenar valores y tipo de valor
$datos =[];

//Desmontamos el array columnas, cojemos el titulo de columna y cargamos cada POST a partir de este
foreach($columnas as $titulo){
    //comprobamos si existe POST de todos los elementos listados en el array
    if(isset($_POST[$titulo[0]])){
        //enviamos al array datos el titulo de columna => con el valor correspondiente de POST
        // Ejemplo: [producto] => 'Collar para Perros',
        $datos[$titulo[0]] = $_POST[$titulo[0]];
    }
}


echo '<pre>';
echo 'array $datos';
print_r($datos);
echo '</pre>';

// ----------------------------------------------------- ESTO PAL CONFIG.PHP ---------
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mascotas";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
   die("Error de conexión: " . $conn->connect_error);
}
// ----------------------------------------------------- FIN DE PAL CONFIG.PHP ---------


//CONSTRUCTOR DE CONSULTAS
    // necesitamos separar los elementos del array $datos por comillas para hacer la consulta
    //construllo un array con los elementos de datos listados con comillas
    function entrecomillar($valor){
        return "'".$valor."'";
    }

    $datosEntrecomillados = array_map("entrecomillar", $datos);
// --- fin de constructor de comillas --


//Montamos la consulta:
$sql = "INSERT INTO productos (`" . implode('`, `', array_keys($datos)) . "`) VALUES (" . implode(', ', $datosEntrecomillados) . ");";
//$sql ="INSERT INTO productos (`producto`, `precio`, `foto`, `codigo`, `marca`, `descripcion`, `categoria`, `stock_ini`, `entradas`, `salidas`, `total`, `animal`, `tamano`, `uni_med`, `valor_unidad`, `activo`) VALUES ('producto', 'precio', 'foto.jpg', '8901234567902', 'marca', 'descripcion', 'categoria', '5', '4', '4', NULL, 'animal', '40', 'cm', 'varlo_unidad', 'activo');";
echo $sql;

//Lanzamos la consulta con los datos que hay en $sql
$result = $conn->query($sql);

//cerramos la conexión a la DB ------------------------ esto irá al footer.php
$conn->close();

?>
