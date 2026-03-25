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
			<div class="container">
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
			<div class="container">
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
			<div class="container">
				<h1>
					Consumir cítricos hace bien
				</h1>
				<div class="bloques">
					<ul class="cualidades">
						<li class="icono"><i class="fas fa-check"></i></li>
						<li class="titulo"><h2><a href="<?php echo get_home_url(); ?>/citricos/cualidades/">Cualidades</a></h2></li>
						<hr>
						<li class="descripcion">
							<div class="loop">
								<?php $the_query = new WP_Query('category_name=cualidades&showposts=1');
								while ($the_query->have_posts()) : $the_query->the_post();
								$do_not_duplicate = $post->ID; ?>
								<ul class="wow fadeInUp">
									<?php global $post; ?>
									<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
									<li class="imagen">
										<a href="<?php the_permalink() ?>">
											<div style="background:url(<?php echo $src[0]; ?>) center no-repeat; height:100%; position:absolute; width:100%;"></div>
										</a>
									</li>
									<div class="texto">
										<li class="titulo">
											<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
												<?php the_title(); ?>
											</a>
										</li>
									</div>
								</ul>
								<?php endwhile;?>
							</div>
						</li>
						<li class="boton">
							<a class="enlace btn btn-primary" href="<?php echo get_home_url(); ?>/citricos/cualidades/">
								Ver más
							</a>
						</li>
					</ul>
					<ul class="recetas">
						<li class="icono"><i class="fas fa-receipt"></i></li>
						<li class="titulo"><h2><a href="<?php echo get_home_url(); ?>/citricos/recetas/">Recetas</h2></a></li>
						<hr>
						<li class="descripcion">
							<div class="loop">
								<?php $the_query = new WP_Query('category_name=recetas&showposts=1');
								while ($the_query->have_posts()) : $the_query->the_post();
								$do_not_duplicate = $post->ID; ?>
								<ul class="wow fadeInUp">
									<?php global $post; ?>
									<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
									<li class="imagen">
										<a href="<?php the_permalink() ?>">
											<div style="background:url(<?php echo $src[0]; ?>) center no-repeat; height:100%; position:absolute; width:100%;"></div>
										</a>
									</li>
									<div class="texto">
										<li class="titulo">
											<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
												<?php the_title(); ?>
											</a>
										</li>
									</div>
								</ul>
								<?php endwhile;?>
							</div>
						</li>
						<li class="boton">
							<a class="enlace btn btn-primary" href="<?php echo get_home_url(); ?>/citricos/recetas/">
								Ver más
							</a>
						</li>
					</ul>
					<ul class="salud">
						<li class="icono"><i class="fas fa-virus"></i></li>
						<li class="titulo"><h2><a href="<?php echo get_home_url(); ?>/citricos/salud/">Salud</a></h2></li>
						<hr>
						<li class="descripcion">
							<div class="loop">
								<?php $the_query = new WP_Query('category_name=salud&showposts=1');
								while ($the_query->have_posts()) : $the_query->the_post();
								$do_not_duplicate = $post->ID; ?>
								<ul class="wow fadeInUp">
									<?php global $post; ?>
									<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
									<li class="imagen">
										<a href="<?php the_permalink() ?>">
											<div style="background:url(<?php echo $src[0]; ?>) center no-repeat; height:100%; position:absolute; width:100%;"></div>
										</a>
									</li>
									<div class="texto">
										<li class="titulo">
											<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
												<?php the_title(); ?>
											</a>
										</li>
									</div>
								</ul>
								<?php endwhile;?>
							</div>
						</li>
						<li class="boton">
							<a class="enlace btn btn-primary" href="<?php echo get_home_url(); ?>/citricos/salud/">
								Ver más
							</a>
						</li>
					</ul>
				</div>
			</div>
		</section>
<?php
get_footer();
