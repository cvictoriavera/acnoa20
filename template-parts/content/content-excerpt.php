<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>

<article class="post-card wow fadeInUp" data-wow-offset="350" id="post-<?php the_ID(); ?>">
    <a href="<?php the_permalink() ?>" class="post-card-link">
        <div class="post-card-image-wrapper">
			<?php global $post; ?>
			<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false, '' ); ?>
            <div class="post-card-image" style="background-image: url('<?php echo esc_url($src[0]); ?>');"></div>
        </div>
        <div class="post-card-content">
            <h3 class="post-card-title"><?php the_title(); ?></h3>
            <hr class="post-card-divider">
            <div class="post-card-meta">
				<?php 
				$categories = get_the_category();
				if ( ! empty( $categories ) ) {
					echo '<span class="post-card-category">' . esc_html( $categories[0]->name ) . '</span>';
				}
				?>
                <span class="post-card-date"><?php the_time( 'M d, Y' ); ?></span>
            </div>
        </div>
    </a>
</article>
