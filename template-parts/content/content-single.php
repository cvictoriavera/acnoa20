<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<p class="fecha"><?php the_time( 'd M, Y' ); ?></p>
	<div class="encabezado">
		<div class="post-thumb">
			<?php
			 if ( has_post_thumbnail()) {
				$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
				echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
				the_post_thumbnail('thumbnail');
				echo '</a>';
			 }
			 ?>
		</div>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
		</header>
	</div>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);
		?>
	</div><!-- .entry-content -->

	<div id="compartir">
        <?php if ( function_exists( 'sharing_display' ) ) { sharing_display( '', true ); } ?>
    </div>

    <div id="relacionado">
		<?php if ( class_exists( 'Jetpack_RelatedPosts' ) ) { echo do_shortcode( '[jetpack-related-posts]' ); } ?>
    </div>
</article><!-- #post-${ID} -->