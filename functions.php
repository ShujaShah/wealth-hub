<?php

require_once('wp_bootstrap_navlist_walker.php');

function wpbasics_theme_setup(){
    //nav menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu' )
    ) );
}

add_action('after_setup_theme','wpbasics_theme_setup');

?>