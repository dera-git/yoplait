<?php
function codex_custom_init() {

    // Marques
    $labels = array(
        'name' => 'Marques',
        'singular_name' => 'Marque',
        'add_new' => 'Ajouter une marque',
        'add_new_item' => 'Ajouter une nouvelle marque',
        'edit_item' => 'Editer une marque',
        'new_item' => 'Nouvelle marque',
        'all_items' => 'Toutes les marques',
        'view_item' => 'Voir marque',
        'search_items' => 'Chercher une marque',
        'not_found' =>  'Aucune marque trouvée',
        'not_found_in_trash' => 'Aucune marque trouvée dans la corbeille',
        'menu_name' => 'Marques'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'marque'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => null,
        'menu_icon' => 'dashicons-awards',
        'show_in_rest' => false,
        'supports' => array('title', 'thumbnail', 'revisions')
    );
    register_post_type('marque', $args);

    // Produits
    $labels = array(
        'name' => 'Produits',
        'singular_name' => 'Produit',
        'add_new' => 'Ajouter un produit',
        'add_new_item' => 'Ajouter un nouveau produit',
        'edit_item' => 'Editer un produit',
        'new_item' => 'Nouveau produit',
        'all_items' => 'Tous les produits',
        'view_item' => 'Voir produit',
        'search_items' => 'Chercher un produit',
        'not_found' =>  'Aucun produit trouvé',
        'not_found_in_trash' => 'Aucun produit trouvé dans la corbeille',
        'menu_name' => 'Produits'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'produit'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-tag',
        'show_in_rest' => false,
        'supports' => array('title', 'thumbnail', 'revisions')
    );
    register_post_type('produit', $args);

}
add_action('init', 'codex_custom_init');
