<?php get_header(); ?>

<main>

	
<?php $term = get_queried_object();  ?>

   <h2>Libros del autor: <? echo $term->name; ?></h2>
  
    <div>
        <h2>Todos los libros de este autor</h2>

        <?php
// Obtén los términos de la taxonomía "autor" del post actual
$terms = wp_get_post_terms(get_the_ID(), 'autor');
$autor_id = '';

// Verifica si hay términos disponibles
if (!empty($terms)) {
   // Obtiene el ID del primer término (asumiendo que solo hay uno)
   $autor_id = $terms[0]->term_id;
}

// Consulta para obtener los otros custom post type "libros" con la misma taxonomía "autor"
$args = array(
   'post_type' => 'libro',
   'tax_query' => array(
      array(
         'taxonomy' => 'autor',
         'field' => 'term_id',
         'terms' => $autor_id,
      ),
   ),
);

// Realiza la consulta
$libros = get_posts($args);

// Muestra el listado de los otros libros encontrados
if ($libros) {
   echo '<ul>';
   foreach ($libros as $libro) {
      echo '<li>';
      echo get_the_post_thumbnail($libro->ID, 'thumbnail'); // Agrega la imagen destacada (thumbnail)
      echo '<a href="' . get_permalink($libro->ID) . '">' . $libro->post_title . '</a>';
      echo '</li>';
   }
   echo '</ul>';
}
?>


    </div>
</main>


<?php get_footer(); ?>
