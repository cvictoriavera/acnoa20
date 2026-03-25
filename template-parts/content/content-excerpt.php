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

<ul class="wow fadeInUp" data-wow-offset="350">
    <?php global $post; ?>
    <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
    <li class="imagen">
        <a href="<?php the_permalink() ?>">
            <div style="background:url(<?php echo $src[0]; ?>) center no-repeat; height:100%; position:absolute; width:100%;"></div>
        </a>
    </li>
    <div class="texto">
        <li class="titulo">
			<p class="fecha"><?php the_time( 'd M, Y' ); ?></p>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
                <?php the_title(); ?>
            </a>
        </li>
        <li class="extracto">
            <?php the_excerpt(); ?>
        </li>
        <li class="seguir">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
                Seguir leyendo
            </a>
        </li>
    </div>
</ul>
