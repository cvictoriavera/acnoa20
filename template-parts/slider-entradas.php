<?php
/**
 * Template part for displaying a horizontal slider of post cards
 */

$category_name = get_query_var('slider_category', 'noticias-generales');
$title = get_query_var('slider_title', 'Noticias Generales');
$link = get_query_var('slider_link', get_home_url() . '/noticias/noticias-generales/');
$slider_id = uniqid('slider_');
?>

<div class="custom-slider-section">
    <div class="slider-header d-flex justify-content-between align-items-center mb-4">
        <button class="slider-nav-btn d-none d-md-flex" onclick="let s=document.getElementById('<?php echo $slider_id; ?>'); s.scrollBy({left: -s.querySelector('.slider-slide').offsetWidth - 32, behavior: 'smooth'})">
            <i class="fas fa-arrow-left"></i>
        </button>
        
        <div class="slider-title-wrapper text-center w-100">
            <h2 class="mb-0" style="display:inline-block; margin:0;">
                <a href="<?php echo esc_url($link); ?>" style="color:inherit; text-decoration:none;"><?php echo esc_html($title); ?></a>
            </h2>
        </div>
        
        <button class="slider-nav-btn d-none d-md-flex" onclick="let s=document.getElementById('<?php echo $slider_id; ?>'); s.scrollBy({left: s.querySelector('.slider-slide').offsetWidth + 32, behavior: 'smooth'})">
            <i class="fas fa-arrow-right"></i>
        </button>
    </div>
    
    <div class="slider-container" id="<?php echo $slider_id; ?>">
        <div class="slider-track">
            <?php 
            $the_query = new WP_Query(array(
                'category_name' => $category_name,
                'posts_per_page' => 6 // O la cantidad que desees en el slider
            ));
            
            if ( $the_query->have_posts() ) :
                while ($the_query->have_posts()) : $the_query->the_post();
            ?>
                    <div class="slider-slide">
                        <?php get_template_part( 'template-parts/content/content', 'excerpt' ); ?>
                    </div>
            <?php 
                endwhile; 
            endif;
            wp_reset_postdata(); 
            ?>
        </div>
    </div>
    
    <div class="slider-mobile-nav d-flex d-md-none justify-content-center mt-4" style="gap: 1rem;">
        <button class="slider-nav-btn" onclick="let s=document.getElementById('<?php echo $slider_id; ?>'); s.scrollBy({left: -s.querySelector('.slider-slide').offsetWidth - 32, behavior: 'smooth'})">
            <i class="fas fa-arrow-left"></i>
        </button>
        <button class="slider-nav-btn" onclick="let s=document.getElementById('<?php echo $slider_id; ?>'); s.scrollBy({left: s.querySelector('.slider-slide').offsetWidth + 32, behavior: 'smooth'})">
            <i class="fas fa-arrow-right"></i>
        </button>
    </div>
    
    <div class="text-center mt-4">
        <a class="enlace btn btn-primary" href="<?php echo esc_url($link); ?>">Ver más</a>
    </div>
</div>
