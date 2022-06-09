<?php

function projektas_register_styles()
{
    wp_enqueue_style('projektas-template-styles', get_template_directory_uri() . 'assets\wp-content\themes\projektas\assets\css\styles.css' . time(), array(), false, 'all');

    wp_enqueue_style('projektas-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css", array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'projektas_register_styles');



function projektas_register_scripts()
{
    wp_enqueue_script('projektas-jquery', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js", array(), null, 'all', true);
}
add_action('wp_enqueue_scripts', 'projektas_register_scripts');
