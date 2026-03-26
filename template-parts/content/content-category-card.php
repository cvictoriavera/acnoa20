<?php
/**
 * Template part for displaying a category card
 */

$cat_slug = get_query_var( 'category_slug' );
if ( ! $cat_slug ) {
    return;
}

$category = get_category_by_slug( $cat_slug );
if ( ! $category ) {
    return;
}

// Intentar obtener el campo ACF o meta nativo
$bg_image = get_option( 'category_' . $category->term_id . '_img_category', '' ); // Algunos temas guardan en wp_options
if ( ! $bg_image && function_exists('get_field') ) {
    $bg_image = get_field('img_category', 'category_' . $category->term_id);
}
if ( ! $bg_image ) {
    $bg_image = get_term_meta( $category->term_id, 'img_category', true );
}

// Resolver URL de la imagen si es un ID o Array
$bg_image_url = '';
if ( is_array( $bg_image ) && isset( $bg_image['url'] ) ) {
    $bg_image_url = $bg_image['url'];
} elseif ( is_numeric( $bg_image ) ) {
    $bg_image_url = wp_get_attachment_url( $bg_image );
} elseif ( is_string( $bg_image ) ) {
    $bg_image_url = $bg_image;
}

$cat_link = get_category_link( $category->term_id );
?>

<a href="<?php echo esc_url( $cat_link ); ?>" class="category-card wow fadeInUp">
    <div class="category-card-bg" style="background-image: url('<?php echo esc_url( $bg_image_url ); ?>');"></div>
    <div class="category-card-overlay"></div>
    <div class="category-card-content">
        <h3 class="category-card-title"><?php echo esc_html( $category->name ); ?></h3>
        <span class="category-card-arrow">
            <i class="fas fa-arrow-right"></i>
        </span>
    </div>
</a>
