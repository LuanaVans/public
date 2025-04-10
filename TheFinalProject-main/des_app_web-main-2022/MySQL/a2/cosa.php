Chat history
New chat
Today
PHP Login System: Password Validation and Lockout


Bloqueo por intentos fallidos
Incrementar valor cookie en PHP.
Previous 7 Days
Confeti con código Java
Corrigiendo código PHP.
New chat
Previous 30 Days
Ayuda de chat.
Imágenes iguales con CSS.
Películas famosas de Bogart
New chat
Películas de D.W.Griffith
Cambiar Colores Gris
Fuente más ancha
Películas fantásticas destacadas
New chat
Crear tabla películas MySQL
Crear base de datos.
Cambiar estilo página web.
New chat
New chat
Inicio de Sesión con Usuario y Contraseña
New chat
New chat
New chat
New chat
CSS centrado en imágenes
Crear tabla MySQL y código PHP.
April
Crear tabla en MySQL.
Upgrade to Plus
NEW


User
Richard Beaugrand

User

2 / 2

php sistema de acceso login con usuario y contraseña para validad una contraseña y bloquear tras 3 intentos fallidos durante unos 10 minutos
ChatGPT
Para implementar un sistema de acceso con PHP que valide un usuario y contraseña, y bloquee el acceso después de 3 intentos fallidos durante 10 minutos, puedes seguir los siguientes pasos:

Crea una tabla en tu base de datos para almacenar los datos de los usuarios. Puedes llamarla "usuarios" y agregar las columnas "id" (autoincremental), "usuario", "contrasena", "intentos_fallidos" y "bloqueado_hasta".

Crea un formulario de inicio de sesión en HTML con campos para el nombre de usuario y contraseña. Asegúrate de incluir un campo oculto para almacenar el número de intentos fallidos.

html
Copy code
<form method="post" action="login.php">
  <label for="username">Usuario:</label>
  <input type="text" name="username" id="username" required><br>
  <label for="password">Contraseña:</label>
  <input type="password" name="password" id="password" required><br>
  <input type="hidden" name="intentos_fallidos" value="0">
  <input type="submit" value="Iniciar sesión">
</form>
Crea un archivo PHP llamado "login.php" para procesar el formulario de inicio de sesión. En este archivo, puedes realizar la validación del usuario y la contraseña, y llevar un registro de los intentos fallidos.
php
Copy code
<?php
session_start();

// Conectarse a la base de datos
$conexion = new PDO("mysql:host=nombre_host;dbname=nombre_base_de_datos", "nombre_usuario", "contrasena");

// Obtener los datos del formulario
$usuario = $_POST['username'];
$contrasena = $_POST['password'];
$intentos_fallidos = $_POST['intentos_fallidos'];

// Consultar el usuario en la base de datos
$consulta = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
$consulta->bindParam(':usuario', $usuario);
$consulta->execute();
$usuario_bd = $consulta->fetch(PDO::FETCH_ASSOC);

// Verificar la contraseña y los intentos fallidos
if ($usuario_bd && password_verify($contrasena, $usuario_bd['contrasena'])) {
  // Contraseña correcta, iniciar sesión
  $_SESSION['usuario'] = $usuario;
  $_SESSION['intentos_fallidos'] = 0;
  header("Location: bienvenido.php"); // Redirigir a la página de bienvenida
} else {
  // Contraseña incorrecta, incrementar los intentos fallidos
  $intentos_fallidos++;

  // Verificar si se han excedido los intentos fallidos
  if ($intentos_fallidos >= 3) {
    // Bloquear el acceso durante 10 minutos
    $bloqueado_hasta = time() + (10 * 60); // 10 minutos en segundos
    $consulta_bloqueo = $conexion->prepare("UPDATE usuarios SET bloqueado_hasta = :bloqueado_hasta WHERE usuario = :usuario");
    $consulta_bloqueo->bindParam(':bloqueado_hasta', $bloqueado_hasta);
    $consulta_bloqueo->bindParam(':usuario', $usuario);
    $consulta_bloqueo->execute();
    echo "Has excedido el número máximo de intentos fallidos. El acceso estará bloqueado durante 10 minutos.";
  } else {
    // Actualizar el número de intentos fallidos en la base de datos
    $consulta_intentos = $conexion->prepare("UPDATE usuarios SET intentos_fallidos = :intentos_fallidos WHERE usuario = :usuario");
    $consulta_intentos->bindParam(':intentos_fallidos', $intentos_fallidos);
    $consulta_intentos->bindParam(':usuario', $usuario);
    $consulta_intentos->execute();
    echo "Usuario o contraseña incorrectos. Intento $intentos_fallidos de 3.";
  }
}
?>
Crea un archivo llamado "bienvenido.php" para mostrar la página de bienvenida después de iniciar sesión correctamente.
php
Copy code
<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['usuario'])) {
  header("Location: login.php"); // Redirigir al formulario de inicio de sesión si no está autenticado
  exit();
}

// Mostrar la página de bienvenida
echo "¡Bienvenido, " . $_SESSION['usuario'] . "!";
?>
Con estos pasos, has implementado un sistema de acceso con PHP que valida el usuario y la contraseña, y bloquea el acceso después de 3 intentos fallidos durante 10 minutos. Ten en cuenta que debes reemplazar "nombre_host", "nombre_base_de_datos", "nombre_usuario" y "contrasena" con los detalles de tu propia configuración de base de datos.






Regenerate response
Send a message.

Free Research Preview. ChatGPT may produce inaccurate information about people, places, or facts. ChatGPT May 24 Version
ChatGPT
