<!DOCTYPE html>
<html <?php  language_attributes(); ?>> <!--Cargamos el atributo de idima-->
    <head>
        <title>
            <?php 
                global $page, $paged;//Variables globales
                wp_title( '|', true, 'right' );
                bloginfo( 'name' );//Nombre real del sitio
                $site_description = get_bloginfo( 'description' , 'display' );
                if ( $site_description && (is_home() || is_front_page() ))
                        echo " | $site_description";
                if ( $paged >= 2 || $page >= 2 )
                        echo " | " . sprintf( __( 'Page %s' ), max ( $paged, $page ) );
            ?>
        </title>
        <meta charset="<?php bloginfo('charset'); ?>"> <!-- Codificación-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>"/>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
        <!--[if lt IE 9]>
            <script src="<?php echo get_template_directory_uri(); ?>//js/html5.js" type="text/javascript">
            </script>
        <![endif]-->
        
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );  ?>
    <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="contenedorPrincipal">
        <header>
            <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
        </header>
            <nav class="menuPrincipal">
                <?php wp_nav_menu(); ?>
            </nav>

