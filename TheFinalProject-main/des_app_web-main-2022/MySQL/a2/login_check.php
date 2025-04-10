<? include '_config.php'?>

<?php

// si existe algo que llega por POST me haces lo siguiente 
if(isset($_POST['usuario']) && isset($_POST['password'])){
    $miusuario = $_POST['usuario'];
    $mipassword= $_POST['password'];

    //hechamos un vistazo a la BBDD
    
    //abrir conexión (tengo una función pa esto en config.php)
    abrirDB();

    $sql ="SELECT usuario, pass, rol FROM usuarios WHERE usuario ='$miusuario' AND pass='$mipassword'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $usuarioCorrecto = $row['usuario'];
        $passwordCorrecto= $row['pass'];
        $rolCorrecto= $row['rol'];

        switch ($rolCorrecto) {
            case 1:
                $rolCorrecto= "admin";
                break;
            case 0:
                $rolCorrecto= "trajador";
                break;
            case 2:
                $rolCorrecto= "visitante";
                break;
        }

        }
    }
    else {
      echo "No se hen encontrado usuarios";
    }



    //comprobamos si el usuario y contraseña son correctos
    if(($miusuario==$usuarioCorrecto) && ($mipassword==$passwordCorrecto)){
       // echo "La pass ta bien.";

        $_SESSION['usuario']=   $usuarioCorrecto;
        $_SESSION['rol']=       $rolCorrecto;

        header("Location: productos.php");
        die();
    }
    else{
    //SI LA CONTRASEÑA ES INCORRECTA
    
        //setcookie("Haker", 1, time() + (15), "/");

        // Verificar si la cookie existe
        if(isset($_COOKIE['Haker'])) {
            // Obtener el valor actual de la cookie
            $valorCookie = $_COOKIE['Haker'];
        
            // Incrementar el valor en 1
            $valorCookie++;
        
            // Establecer la cookie con el nuevo valor y una duración de 15 segundos
            setcookie('Haker', $valorCookie, time() + 15);
        } else {
            // Si la cookie no existe, establecerla con el valor inicial de 1 y una duración de 15 segundos
            setcookie('Haker', 1, time() + 15);
        }
        
        // Imprimir el valor actual de la cookie
        echo "Valor actual de la cookie Haker: " . $_COOKIE['Haker'];
    

        header("Location: login.php?cosa");
        die();
    }

}

