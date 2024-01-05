<?php
function add_theme_scripts()
{

    $template_data       = wp_get_theme();
    $template_version    = $template_data['Version'];
    $template_name       = get_page_template_slug();

    wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/assets/node_modules/bootstrap/dist/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('font-Lato', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Satisfy&display=swap', array(), null);
    wp_enqueue_style('poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap', array(), null);
    wp_enqueue_style('lexend', 'https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap', array(), null);
    wp_enqueue_style('inter', 'href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;800;900&display=swap" rel="stylesheet"', array(), null);
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', array(), null);
    wp_enqueue_style('select2.min.css', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css', array(), null);
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/node_modules/slick-carousel/slick/slick-theme.css', array(), null);
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/node_modules/slick-carousel/slick/slick.css', array(), null);
    wp_enqueue_style('animate.min', get_template_directory_uri() . '/assets/node_modules/animate.css/animate.min.css', array(), null);
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/node_modules/swiper/swiper-bundle.min.css', array(), null);
    wp_enqueue_style('utilities.min', get_template_directory_uri() . '/assets/css/utilities.min.css', array(), null);
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), null);
    wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css', array(), $template_version);
    wp_enqueue_style('single-article', get_template_directory_uri() . '/assets/css/single_article.css', array(), $template_version);

    wp_enqueue_script('jquery.min', get_template_directory_uri() . '/assets/node_modules/jquery/dist/jquery.min.js', array(), null, false);
    wp_enqueue_script('bootstrap.bundle', get_template_directory_uri() . '/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.js', array(), null, false);
    wp_enqueue_script('slick.min', get_template_directory_uri() . '/assets/node_modules/slick-carousel/slick/slick.min.js', array(), null, false);
    wp_enqueue_script('anime.min', get_template_directory_uri() . '/assets/node_modules/animejs/lib/anime.min.js', array(), null, false);
    wp_enqueue_script('jquery.waypoints.min', get_template_directory_uri() . '/assets/node_modules/waypoints/lib/jquery.waypoints.min.js', array(), null, false);
    wp_enqueue_script('swiper-bundle.min', get_template_directory_uri() . '/assets/node_modules/swiper/swiper-bundle.min.js', array(), null, false);
    wp_enqueue_script('jquery.matchHeight-min', get_template_directory_uri() . '/assets/node_modules/jquery-match-height/dist/jquery.matchHeight-min.js', array(), null, false);
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), null, false);
    wp_enqueue_script('gsapScrollTrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array(), null, false);
    wp_enqueue_script('select2.min', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js', array(), null, false);
    wp_enqueue_script('infiniteslide', get_template_directory_uri() . '/assets/js/infiniteslidev2.min.js', array(), null, false);
    wp_enqueue_script('anim.blob', get_template_directory_uri() . '/assets/js/anim.blob.js', array(), null, false);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), null, false);
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array(), $template_version, false);
    wp_enqueue_script('map', get_template_directory_uri() . '/assets/js/map.js', array(), null, true);
    if ( is_page_template( 'template/actualites.php' ) ) {
        wp_enqueue_script('news', get_template_directory_uri() . '/assets/js/news.js', array(), $template_version, true);
    }
    if ( is_page_template( 'template/ofa.php' ) ) {
        wp_enqueue_script('ofa', get_template_directory_uri() . '/assets/js/ofa.js', array(), $template_version, false);
    }
    if ( is_page_template( 'template/single-marque.php' ) ) {
        wp_enqueue_script('ofa', get_template_directory_uri() . '/assets/js/single-marque.js', array(), $template_version, false);
    }
    if ( is_page_template( 'template/custom-nos-marques.php' ) ) {
        wp_enqueue_script('ofa', get_template_directory_uri() . '/assets/js/nos-marques.js', array(), $template_version, false);
    }
    if (is_front_page() || (get_post_type() == "marque" && get_the_ID() == 1571)) {
        wp_enqueue_script('js.cookie', 'https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js', array(), $template_version, false);
        wp_enqueue_script('modal', get_template_directory_uri() . '/assets/js/modal.js', array(), $template_version, false);
    }
    $translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
    wp_localize_script( 'map', 'object_name', $translation_array );
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');
