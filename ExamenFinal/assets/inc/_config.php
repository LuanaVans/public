<?php

  // Realizamos la conexión a la base de datos
 // Database configuration
 $host = 'localhost';
 $dbname = 'events_db';
 $user = 'root';
 $pass = 'root'; // Asegúrate que esta es tu contraseña correcta


 // Establish database connection using MySQLi procedural
 $conn = mysqli_connect($host, $user, $pass, $dbname);


 // Chequeamos la conexión
 if (mysqli_connect_errno()) {
     echo "Database Connection Error: " . mysqli_connect_error();
     die();
 }


 // Set character set to UTF-8
 if (!mysqli_set_charset($conn, "utf8mb4")) {
     printf("Error loading character set utf8mb4: %s\n", mysqli_error($conn));
     // Consider dying here if charset is critical
 }


 // Get the current view mode (list, grid, table, map, calendar)
 $view_mode = isset($_GET['view']) ? $_GET['view'] : 'list';


 // Get search query if present
 $search_query = isset($_GET['search']) ? trim($_GET['search']) : ''; // Trim whitespace



  // Tomamos el valor de la búsqueda y el filtro de categoría desde la URL
  $category_filter = isset($_GET['category']) ? (int)$_GET['category'] : 0;


  // Tomamos el valor de la búsqueda desde la URL
  $event_id = isset($_GET['event_id']) ? (int)$_GET['event_id'] : 0;


  // Tomamos el valor de la búsqueda desde la URL
  $categories = [];
  $sql_categories = "SELECT id, name FROM categories ORDER BY name";
  $result_categories = mysqli_query($conn, $sql_categories);


  if ($result_categories) {
      $categories = mysqli_fetch_all($result_categories, MYSQLI_ASSOC);
      mysqli_free_result($result_categories); 
  } else {
      echo "Error fetching categories: " . mysqli_error($conn);
      // Decider si quieres manejar el error de otra manera
  }
?>
<?php
                      // Función para crear URL
                      function build_view_link_params($current_search, $current_category) {
                          $link_params = '';
                          if (!empty($current_search)) {
                              $link_params .= '&search='.urlencode($current_search);
                          }
                          if ($current_category > 0) {
                              $link_params .= '&category='.$current_category;
                          }
                          return $link_params;
                      }
                      $link_extra_params = build_view_link_params($search_query, $category_filter);
                  ?>
