<?php

function theme_supports () {
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support( 'post-thumbnails' );
    register_nav_menu('header', 'Menu de navigation');
}

function theme_register_assets () {
    // Swiper
    wp_enqueue_style('swiper', "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css");
    wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js');

    // Styles
    wp_enqueue_style('resetStyle', get_stylesheet_directory_uri() . '/css/base/_reset.css');
    wp_enqueue_style('toolsStyle', get_stylesheet_directory_uri() . '/css/base/_tools.css');
    wp_enqueue_style('variablesStyle', get_stylesheet_directory_uri() . '/css/abstracts/_variables.css');
    wp_enqueue_style('typographyStyle', get_stylesheet_directory_uri() . '/css/base/_typography.css');
    wp_enqueue_style('baseStyle', get_stylesheet_directory_uri() . '/css/base/_base.css');
    wp_enqueue_style('buttonsStyle', get_stylesheet_directory_uri() . '/css/components/_buttons.css');
    wp_enqueue_style('animationsStyle', get_stylesheet_directory_uri() . '/css/components/_animations.css');
    wp_enqueue_style('footerStyle', get_stylesheet_directory_uri() . '/css/layout/_footer.css');
    wp_enqueue_style('headerStyle', get_stylesheet_directory_uri() . '/css/layout/_header.css');

    // Pages Styles
    wp_enqueue_style('homepageStyle', get_stylesheet_directory_uri() . '/css/homepage.css');

    // FontAwesome
    wp_enqueue_style('fontAwesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');

    // Scripts



}

add_action('after_setup_theme', 'theme_supports');
add_action('wp_enqueue_scripts', 'theme_register_assets');
/*add_action( 'init', 'wpm_custom_post_type', 0 );*/

/*function wpm_custom_post_type() {
    // Offres
    $labels = array(
        'name'                => _x( 'Offres', 'Post Type General Name'),
        'singular_name'       => _x( 'Offre', 'Post Type Singular Name'),
        'menu_name'           => __( 'Offres'),
        'all_items'           => __( 'Toutes les offres'),
        'view_item'           => __( 'Voir l\'offre'),
        'add_new_item'        => __( 'Ajouter une nouvelle offre'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer l\'offre'),
        'update_item'         => __( 'Modifier l\'offre'),
        'search_items'        => __( 'Rechercher une offre'),
        'not_found'           => __( 'Non trouvée'),
        'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
    );

    $args = array(
        'label'               => __( 'Offres'),
        'description'         => __( 'Tous sur les offres'),
        'labels'              => $labels,
        'menu_icon'           => 'dashicons-tickets-alt',
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'show_in_rest'        => true,
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => false,
        'rewrite'			  => array( 'slug' => 'offres'),

    );
    register_post_type( 'offres', $args );
}*/


/*function add_module_to_my_script($tag, $handle, $src) {
    if ("homeScript" === $handle) {
        $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
    }
    return $tag;
}
add_filter("script_loader_tag", "add_module_to_my_script", 10, 3);*/