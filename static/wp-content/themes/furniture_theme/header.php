<!doctype html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="Sandor Attila Furniture"/>
    <meta name="keywords" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,700,700i" rel="stylesheet">
    <?php wp_head(); ?>
</head>
    <?php
        if( is_front_page() ):
            $awesome_classes = array( 'home' );
        else:
            $awesome_classes = array( 'no-home' );
        endif;
    ?>
    <body <?php body_class( $awesome_classes ); ?>>
        <div class="container">
            <header></header>

