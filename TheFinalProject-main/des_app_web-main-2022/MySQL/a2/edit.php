
<? include '_config.php'?>
<? $miTituloApartado="Editar Productos";?>
<? include '_header.php'?>

<?php
    //PASO 1. Obtener id que llega del GET
    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }

    $elementos =[
        ['nombre',      'text',     'Nombre usuario:'],
        ['descripcion', 'text',     'Tu descripcion:'],
        ['precio',      'number',   'El Precio:'],
        ['stock',       'number',   'Stock:'],
        ['img',         'text',     'Imagen destacada:'],
        ['slug',        'text',     'Texto para URL:']
    ];

    //PASO 2. Consultar los datos que quiero mostrar de la DB.
    //Voy a construir esa consulta a partir del array

    //Abrir DB
    abrirDB();

    //creo un array temporalmente donde almacenaré el primer elemento del array elementos
    $lista = array();

    foreach ($elementos as $elemento) {
          $lista[] = $elemento[0];
      }
      
      $listado = implode(', ', $lista);
 

       //Construir la consulta con los datos del array
       $sql = "SELECT $listado FROM articulos WHERE id = $id";
       $result = $conn->query($sql);
   
    
    // echo '<pre>';
    // echo $sql;
    // echo '<br>';;
    // echo '<pre>';

    //Almacenamos los datos obtenidos en la DB
    $listilla=[];

    if ($result->num_rows > 0) {
    // output data of each row
        foreach($row = $result->fetch_assoc() as $ele){
            array_push($listilla, $ele);
        }
    }
    else {
        echo "0 results";
    }

   //print_r($listilla);


   //PASO 4. Construcción de formulario con campos ya rellenos
?>
<form action="add_checker.php" method="POST">
<?
    $i=0;
    foreach($elementos as $elemento){       
        echo '<label for="'.$elemento[0].'">'.$elemento[2].'</label>';
        echo '<input type="'.$elemento[1].'" id="'.$elemento[0].'" name="'.$elemento[0].'" value="'.$listilla[$i].'">';
        $i++;
    }
?>

<input type="submit" value="Enviarlooo!">

</form>


<? include '_footer.php'?>
