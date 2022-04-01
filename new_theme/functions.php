<?php 
// suport 
function montheme_setup()
{
    add_theme_support('title-tag'); // titre
    add_theme_support( 'post-thumbnails' ); //images
    add_theme_support('menus');// menus

    register_nav_menu('main_menu', 'Menu principal');
    register_nav_menu('footer_menu', 'Menu footer');
}
add_action('after_setup_theme', 'montheme_setup');



// chargement css/js bootstrap v5
function montheme_register_asset()
{
    wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"',[]);//css
    wp_register_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js',[]);//js

    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts','montheme_register_asset');


// widget sidebar 
function montheme_widgets_sidebar() 
{
    register_sidebar(array(
        'id' => 'left-sidebar',
        'name' => 'Sidebar-left',
        'description' => 'Apparait a gauche du site',
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ));

    register_sidebar( array(
        'id' => 'right-sidebar',
        'name' => 'Sidebar-right',
        'description' => 'Apparait a droite du site',
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ));
}
add_action( 'widgets_init', 'montheme_widgets_sidebar' );

// post-type

function montheme_register_post_types() 
{
    $labels = array(
        'name' => 'Portfolio',
        'all_items' => 'Tous les projets',  // affiché dans le sous menu
        'singular_name' => 'Projet',
        'add_new_item' => 'Ajouter un projet',
        'edit_item' => 'Modifier le projet',
        'menu_name' => 'Portfolio'
    );

    $args = array(
        'labels' => $labels,
        'public' => true, //accessible sur le site ?
        'show_in_rest' => true, //accessible par l'API? Gutenberg en a besoin pour fonctionner correctement
        'has_archive' => true, //comme les articles ou comme les pages ?
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-admin-customizer',
    );

    register_post_type( 'portfolio', $args ); //le nom de notre CPT
    
    $labels = array(
        'name' => 'Type de projets',
        'new_item_name' => 'Nom du nouveau Projet',
      'parent_item' => 'Type de projet parent',
    );
    
    $args = array( 
        'labels' => $labels,
        'public' => true, //nécessaire pour l’affichage sur le site
        'show_in_rest' => true, //nécessaire pour l’éditeur
        'hierarchical' => true, //comportement catégorie ou étiquettes
    );
    // On déclare la taxonomie et on la lie avec le CPT portfolio
    register_taxonomy( 'type-projet', 'portfolio', $args );
}
    add_action( 'init', 'montheme_register_post_types' );
// modif du séparateur titre
function montheme_title_separator()
{
    return '<';
}
add_filter('document_title_separator','montheme_title_separator');


