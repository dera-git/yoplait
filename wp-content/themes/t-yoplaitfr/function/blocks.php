<?php
function my_acf_init_block_types()
{

    if (function_exists('acf_register_block_type')) {

        acf_register_block_type(
            array(
                'name'              => 'Call to action',
                'title'             => 'Call to action',
                'description'       => '',
                'render_template'   => 'function/blocks/calltoaction.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('cta', 'call to action'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'Bloc abeilles',
                'title'             => 'Bloc abeilles',
                'description'       => '',
                'render_template'   => 'function/blocks/bloc-abeilles.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('abeille', 'bloc abeilles'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'Banner RSE',
                'title'             => 'Banner RSE',
                'description'       => '',
                'render_template'   => 'function/blocks/rse/banner-rse.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('banner-rse', 'banner_rse'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'Bloc essentiel',
                'title'             => 'Bloc essentiel',
                'description'       => '',
                'render_template'   => 'function/blocks/rse/essential.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('essentiel', 'essentiel'),
            )
        );

        acf_register_block_type(
            array(
                'name'              => 'Bloc jaune',
                'title'             => 'Bloc jaune',
                'description'       => '',
                'render_template'   => 'function/blocks/rse/bloc-yellow.php',
                'category'          => 'formatting',
                'icon'              => 'star-filled',
                'keywords'          => array('bloc_jaune', 'bloc_jaune'),
            )
        );

    }
}
add_action('acf/init', 'my_acf_init_block_types');
