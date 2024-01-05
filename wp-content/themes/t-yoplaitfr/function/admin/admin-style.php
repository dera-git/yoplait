<?php
function admin_style(){
    wp_enqueue_style('admin-bootstrap', get_template_directory_uri() . '/assets/css/admin/bootstrap-grid.rtl.css');
    wp_enqueue_style('admin-styles', get_template_directory_uri() . '/assets/css/admin/panel.css');
}
add_action('admin_enqueue_scripts', 'admin_style');

add_theme_support(
    'editor-color-palette',
    array(
        array(
            'name'  => 'Rouge',
            'slug'  => 'rouge',
            'color' => '#eb1f34',
        ),
        array(
            'name'  => 'Orange',
            'slug'  => 'orange',
            'color' => '#f8a530',
        ),
        array(
            'name'  => 'Noir',
            'slug'  => 'noir',
            'color' => '#22201f',
        ),
        array(
            'name'  => 'Mauve',
            'slug'  => 'mauve',
            'color' => '#7C8FA2',
        )
    )
);