<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>
		<section id="slider">
			<?php
				echo do_shortcode('[smartslider3 slider="3"]');
			?>
		</section>

		<section id="estadisticas" class="container-fluid my-5">
			<div class="row no-gutters w-100 m-0">
				<!-- Izquierda: Texto -->
				<div class="col-md-6 d-flex flex-column justify-content-center" style="padding: 5rem 3rem;">
					<div class="estadisticas-contenido w-100" style="max-width: 500px; margin: 0 auto;">
						<span class="d-inline post-card-category">Exclusivo</span>
						<h2 class="my-2">Estadísticas</h2>
						<span class="fs-2">Aquí encontrarás las estadísticas exclusivas para los directivos.</span>
						<a href="#" class="mt-3 btn btn-estadisticas">Ver estadísticas</a>
					</div>
				</div>
				<!-- Derecha: Imagen Placeholder -->
				<div class="col-md-6 p-0 d-flex">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/infographics.png" alt="Estadísticas" class="w-100" style="object-fit: cover; min-height: 400px;">
				</div>
			</div>
		</section>

		<section class="py-5">
			<div class="noticias container-fluid overflow-hidden">
				<?php 
				set_query_var( 'slider_category', 'noticias-generales' );
				set_query_var( 'slider_title', 'Noticias Generales' );
				get_template_part( 'template-parts/slider', 'entradas' ); 
				?>
			</div>
		</section>
		
		<section id="publicitar">
			<div class="container">
				<?php
					echo do_shortcode('[smartslider3 slider="6"]');
				?>
			</div>
		</section>

		<section id="publicitar">
			<div class="container">
				<?php
					echo do_shortcode('[smartslider3 slider="7"]');
				?>
			</div>
		</section>

		<section id="citricos">
			<div class="container-fluid">
				<h2 class="text-center mb-4">
					Consumir cítricos hace bien
				</h2>
				<div class="d-flex flex-wrap justify-content-center" style="gap: 1.5rem;">
					<?php set_query_var( 'category_slug', 'salud' ); ?>
					<?php get_template_part( 'template-parts/content/content', 'category-card' ); ?>

					<?php set_query_var( 'category_slug', 'recetas' ); ?>
					<?php get_template_part( 'template-parts/content/content', 'category-card' ); ?>					
				</div>
			</div>
		</section>
<?php
get_footer();
