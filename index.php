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

		<section id="secciones-informativas">
			<div class="container-fluid">
				<div class="bloques">
					<div class="normativa">
						<a href="<?php echo get_home_url(); ?>/normativa-convenios-y-paritarias/">
							<div class="imagen">
								<h1>Normativa<br />Convenios y Paritarias</h1>
							</div>
						</a>
					</div>
					<div class="fitosanidad">
						<a href="<?php echo get_home_url(); ?>/fitosanidad-calidad/">
							<div class="imagen">
								<h1>Fitosanidad y Calidad</h1>
							</div>
						</a>
					</div>
					<div class="mercados">
						<a href="<?php echo get_home_url(); ?>/mercados/">
							<div class="imagen">
								<h1>Mercados</h1>
							</div>
						</a>
					</div>
					<div class="estadisticas">
						<a href="<?php echo get_home_url(); ?>/estadisticas/">
							<div class="imagen">
								<h1>Estadísticas</h1>
							</div>
						</a>
					</div>
					<div class="capacitaciones">
						<a href="<?php echo get_home_url(); ?>/capacitaciones/">
							<div class="imagen">
								<h1>Capacitaciones</h1>
							</div>
						</a>
					</div>
					<div class="covid-19">
						<a href="<?php echo get_home_url(); ?>/covid-19/">
							<div class="imagen">
								<h1>COVID-19</h1>
							</div>
						</a>
					</div>
				</div>
				
			</div>
		</section>

		

		<section>
			<div class="noticias">
				<h1>
					<a href="<?php echo get_home_url(); ?>/noticias/noticias-generales/">Noticias Generales</a>
				</h1>
				<div class="loop">
					<?php $the_query = new WP_Query('category_name=noticias-generales&showposts=6');
					while ($the_query->have_posts()) : $the_query->the_post();
					$do_not_duplicate = $post->ID; ?>
					<?php get_template_part( 'template-parts/content/content', 'excerpt' ); ?>
					<?php endwhile;?>
				</div>
				<a class="enlace btn btn-primary" href="<?php echo get_home_url(); ?>/noticias/noticias-generales/">
					Ver más
				</a>
			</div>
		</section>
		
		<section id="publicitar">
			<div class="container">
				<?php
					echo do_shortcode('[smartslider3 slider="6"]');
				?>
			</div>
		</section>

		<section id="novedades">
			<div class="container-fluid px-0">
				<h1>
					<a href="<?php echo get_home_url(); ?>/noticias/novedades-gestion/">Novedades de Gestión</a>
				</h1>
				<div class="loop">
					<?php $the_query = new WP_Query('category_name=novedades-gestion&showposts=3');
					while ($the_query->have_posts()) : $the_query->the_post();
					$do_not_duplicate = $post->ID; ?>
					<?php get_template_part( 'template-parts/content/content', 'excerpt' ); ?>
					<?php endwhile;?>
				</div>
				<a class="enlace btn btn-primary" href="<?php echo get_home_url(); ?>/noticias/novedades-gestion/">
					Ver más
				</a>
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
				<h1>
					Consumir cítricos hace bien
				</h1>
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
