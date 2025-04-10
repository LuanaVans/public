<?php

$cookie_name = "Haker";
$cookie_value = "1";
setcookie($cookie_name, $cookie_value, time() + (25), "/"); // 86400 = 1 day

if(!isset($_COOKIE[$cookie_name])) {
  //aquí lo que pasaría si la cookie no existe
  echo "La Cookie nombrada como '" . $cookie_name . "' no existe. Insetar formulario aquí.";
} else {
  //aquí lo que pasaría si la cookie sí existe
  echo "Cookie '" . $cookie_name . "' existe!<br>";
  echo "Su valor es " . $_COOKIE[$cookie_name];
}
?>