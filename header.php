<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"> 

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/favicon/ms-icon-144x144.png">
	
	<!-- Change the color of address bar in mobile web browsers -->
	<meta name="theme-color" content="#EDBB11">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" crossorigin="anonymous">

	<!-- Animations -->
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/js/animate.css" rel="stylesheet" media="all">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/js/animations.css" rel="stylesheet" media="all">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/js/hover.css" rel="stylesheet" media="all">
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script><!-- WOW Animation -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Smooth Scroll -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Facebook Fan Page -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v7.0"></script>

<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<div class="marcas container">
			<a class="logo hvr-float" href="<?php echo get_home_url(); ?>">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/logo.svg" alt="Logo" />
			</a>
			<ul class="idiomas">
				<li class="acceso">
					<div id="entrar">
						<?php if ( is_user_logged_in() ): ?>
							<a class="boton" href="<?php echo get_home_url(); ?>/mi-cuenta/">
								Mi Cuenta
							</a>
						<?php else : ?>
							<!-- Button trigger modal -->
							<button type="button" class="boton" data-toggle="modal" data-target="#exampleModalCenter">
								Ingresar
							</button>

							<!-- Modal -->
							<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<i class="fas fa-times"></i>
											</button>
										</div>
										<div class="modal-body">
											<?php
											echo do_shortcode('[theme-my-login action ="login"]');
											?>
										</div>
									</div>	
								</div>
							</div>
						<?php endif; ?>
					</div>
				</li>
				<li id="banderas"  style="width: 10%">
					<?php echo do_shortcode('[google-translator]'); ?>
				</li>
			</ul>
			<ul class="entidades">
				<li>
					<div class="logos">
						<a class="afinoa" href="http://afinoa.com.ar/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/logo-afinoa.svg" alt="Logo AFINOA" />AFINOA</a>
						
					</div>
				</li>
			</ul>
		</div>
        <nav class="navbar navbar-expand-lg sps sps--abv container" data-sps-offset="110">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_home_url(); ?>/quienes-somos/">Institucional</a>
                    </li>
					<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Socios</a>
                       <div class="dropdown-menu">
    <?php /* <a class="dropdown-item" href="<?php echo get_home_url(); ?>/socios/viveristas/">Viveristas</a> */ ?>
    <a class="dropdown-item" href="<?php echo get_home_url(); ?>/socios/productores/">Productores</a>
    <a class="dropdown-item" href="<?php echo get_home_url(); ?>/socios/empacadores/">Empacadores</a>
    <a class="dropdown-item" href="<?php echo get_home_url(); ?>/socios/industriales/">Industriales</a>
</div>
					</li>
					<li class="nav-item">
                        <a class="nav-link" href="http://afinoa.com.ar/" target="_blank">AFINOA</a>
                    </li>
					<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Productos</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo get_home_url(); ?>/productos/limon/">Limón</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/productos/naranja/">Naranja</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/productos/pomelo/">Pomelo</a>
                        </div>
					</li>
					<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Noticias</a>
                        <div class="dropdown-menu">
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/noticias/novedades-gestion/">Novedades de Gestión</a>
							<a class="dropdown-item" href="<?php echo get_home_url(); ?>/noticias/noticias-generales/">Noticias Generales</a>
                        </div>
					</li>
					<li class="nav-item">
                        <a class="nav-link" href="#formulario">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
