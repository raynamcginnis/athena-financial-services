<?php

// enqueue style

if(!function_exists('afs_ffws')) : 
    function afs_ffws() {
        wp_enqueue_style('afs-style', get_stylesheet_uri(), array(), wp_get_theme() -> get('Version'));
    }
endif;

add_action('wp_enqueue_scripts', 'afs_ffws');