<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container">
        <header>

            <div class="nav-bgc">
                <div class="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="logo"><img src="https://designsolutions.pl/dev/cobantsa/wp-content/uploads/2021/04/COBANT-group-logo.png" alt=""></div>
                <nav>
                 <?php 
                 
                 wp_nav_menu( array(
                     'theme_location' => 'top-menu',
                     'container' => false
                 ))
                 ?>


                </nav>
            </div>
        
