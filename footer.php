<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>
				
		<section id="contacto">
			<div class="container">
				<div class="nuestras-redes">
					<h1>Nuestras Redes</h1>
					<div class="fb-page" data-href="https://www.facebook.com/acnoacitrus/" data-tabs="timeline" data-width="500" data-height="645" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/acnoacitrus/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/acnoacitrus/">ACNOA</a></blockquote></div>
					<div class="instagram">
						<?php echo do_shortcode('[instagram-feed feed=2]'); ?>
					</div>
				</div>
				<div id="formulario">
					<h1>Escribinos un mensaje</h1>
					<?php 
						echo do_shortcode('[contact-form-7 id="49" title="Escribinos un mensaje"]');
					?>
				</div>
			</div>
		</section>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
        <div class="container">
			<a class="logo hvr-float" href="<?php echo get_home_url(); ?>">
                <img class="wow fadeInUp" src="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/logo2.svg" alt="Logo" />
            </a>
			<div class="informacion">
				<ul class="direcciones">
					<li>
						<strong>Tucumán</strong><br />
						+54 (381) 231-9339<br />
						secretaria@acnoa.com.ar<br />
						Pringles 498, Yerba Buena,<br />
						Tucumán (4107)
					</li>
				</ul>
				<ul class="redes">
					<li>
						<span>¡Seguinos nuestras<br /> 
						redes sociales!</span><br />
						<div class="iconos">
							<a href="https://www.facebook.com/acnoacitrus/" target="_blank"><i class="fab fa-facebook-square"></i></a>
							<a href="https://www.instagram.com/acnoacitrus/" target="_blank"><i class="fab fa-instagram-square"></i></a>
							<a href="https://www.linkedin.com/company/acnoa/" target="_blank"><i class="fab fa-linkedin"></i></a>
							<a href="https://twitter.com/Acnoacitrus/" target="_blank"><i class="fab fa-twitter-square"></i></a>
						</div>
					</li>
				</ul>
				<ul class="entidades">
					<li>
						<div class="logos">
							<a class="afinoa" href="http://afinoa.com.ar/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/logo-afinoa.svg" alt="Logo AFINOA" />AFINOA</a>
							<div class="lemon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/logo-all-lemon.svg" alt="Logo All Lemon" />All Lemon</div>
						</div>
					</li>
				</ul>
			</div>
        </div>
	</footer><!-- #colophon -->

    <div id="ideconsultora">
        <div class="container">
            <a href="//ideconsultora.com.ar/" target="_blank">
                <img src="//ideconsultora.com.ar/imagenes/ide-01.svg" />
                <span>
                    otro sitio web realizado por Ide Consultora.<br>
                    Comunicación Digital.
                </span>
            </a>
        </div>
    </div>
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Latest compiled and minified CSS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- Scrolling Nav JavaScript -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.scrollify.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.easing.min.js"></script>

<!-- Scrollpos Styler -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scrollPosStyler.js"></script>
</body>
</html>
