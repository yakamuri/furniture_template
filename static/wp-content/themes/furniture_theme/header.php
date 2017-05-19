<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Attila Sandor Furniture Design Theme</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
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

