<?php 




function cobantgroup_custom_theme() {
wp_register_style( 'custom_css', get_template_directory_uri() . '/css/style.css', false, '1.0.0' );
wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', [], false, '1.0.0');


wp_enqueue_style( 'custom_css' );
}

add_action( 'wp_enqueue_scripts', 'cobantgroup_custom_theme' );

function cobantgroup_custom_menu() {
register_nav_menu( 'top-menu',__('Cobant Group Menu', 'cobantgroupmenu') );
}

add_action( 'init', 'cobantgroup_custom_menu' );

add_action('init', function() {
    pll_register_string('buttona', 'O nas');
    pll_register_string('buttonb', 'Oferty');
    pll_register_string('footer_text', 'Tekst w stopce');
    pll_register_string('contact', 'Kontakt stopka');
    pll_register_string('town', 'Miasto');
    pll_register_string('department', 'Oddział');
    
  });