<? include '_config.php'?>
<? $miTituloApartado="Listado de Productos";?>
<? include '_header.php'?>


<? if(isset($_SESSION['rol'])){
    if($_SESSION['rol']=='admin'){
   echo "Buenos días Sr. Alejandro, es usted ADMINISTRADOR";
   $_SESSION['admin']=true;
}
};?>



<style>
    table img{
        width:20px;
    }
    </style>

<?php
//abrir conexión (tengo una función pa esto en config.php)
abrirDB();

//Consulta
$sql = "SELECT * FROM articulos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo '<table>';

  if(isset($_SESSION['admin'])){
    echo '<th> id </th>';
  }

  echo '<th> img </th>';
  echo '<th> nombre </th>';

  if(!isset($_SESSION['admin'])){
    echo '<th> descripcion </th>';
  }

  echo '<th> precio </th>';

  if(isset($_SESSION['admin'])){
     echo '<th> stock </th>';
  }
  echo '</thead>';
  while($row = $result->fetch_assoc()) {
    echo '<tr>';
    if(isset($_SESSION['admin'])){
    echo '<td>'.$row["id"].'</td>';
    }
    echo '<td><img src="img/'.$row["img"].'"></td>';
    echo '<td>'.$row["nombre"].'</td>';
   
    if(!isset($_SESSION['admin'])){
        echo '<td>'.$row["descripcion"].'</td>';
    }

    echo '<td>'.convertirDecimal($row["precio"]).'</td>';
    
    if(isset($_SESSION['admin'])){
    echo '<td>'.$row["stock"].'</td>';
    echo '<td><a href="edit.php?id='.$row["id"].'">Modificar</a></td>';
    echo '<td><a href="borrar.php?id='.$row["id"].'">Borrar</a></td>';
    }

    echo '</tr>';
  }
  echo '</table>';
} else {
  echo "0 results";
}



if(isset($_SESSION['admin'])){
    echo '<br><br><br>';
    echo '<a href="add.php" class="btn">Añadir Producto</a>';
}

?>




<? include '_footer.php'?>
