<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<? get_header(); ?>


	<section id="primary" class="site-content">
		<div id="content" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title">Listao de Libros completo</h1>
				<h2>Disfruta de nuestra colección de literatura fantástica</h2>
			</header><!-- .archive-header -->
<ul class="lista-libros">
			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the post format-specific template for the content. If you want
				 * to use this in a child theme then include a file called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				//get_template_part( 'content', get_post_format() );
				?>
<li class="librillo">
<a href="<? echo get_permalink($post_id); ?>">
<?php the_post_thumbnail('medium'); ?>
<h3 class="entry-title-libro"><?php the_title(); ?></h3>
</a>
<ul class="autores"><?php echo get_the_term_list( $post->ID, 'autor', '<li>', ', ', '</li>' ) ?></ul>
<p>	<?php the_excerpt();  ?></p>



</li>
<?


			endwhile;
			twentytwelve_content_nav( 'nav-below' );
			?>
</ul>	
		<?php else : ?>
			<h3>No hemos podido encontrar libros</h3>
		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
