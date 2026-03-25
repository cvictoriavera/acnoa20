<?php
/**
 * ACNOA 2020 - functions.php corregido para PHP 8.2
 */

/** 1. Noticias relacionadas Jetpack - Cambiar Título */
add_filter( 'jetpack_relatedposts_filter_headline', 'acnoa_jetpack_related_posts_headline' );
function acnoa_jetpack_related_posts_headline( $headline ) {
    return sprintf(
        '<h4 class="jp-relatedposts-headline"><em>%s</em></h4>',
        esc_html( 'Relacionado:' )
    );
}

/** 2. Noticias relacionadas Jetpack - Excluir categorías */
add_filter( 'jetpack_relatedposts_filter_filters', 'acnoa_jetpack_exclude_categories' );
function acnoa_jetpack_exclude_categories( $filters ) {
    $filters[] = array( 
        'not' => array( 
            'terms' => array( 'category.slug' => array( 'excluir1', 'excluir2' ) ) 
        ) 
    );
    return $filters;
}

/** 3. Corrección de Librería Gráfica (Error HTTP) */
add_filter( 'wp_image_editors', 'acnoa_change_graphic_lib' );
function acnoa_change_graphic_lib( $editors ) {
    // Priorizamos GD sobre Imagick para mayor estabilidad en PHP 8.2
    return array( 'WP_Image_Editor_GD', 'WP_Image_Editor_Imagick' ); 
}

/** * Nota: Se han eliminado las funciones jetpackme_remove_rp y jptweak_remove_share 
 * por incompatibilidad directa con PHP 8.2 y el núcleo actual de Jetpack.
 */