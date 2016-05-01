<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>" />
      <meta name="viewport" content="width=device-width" />
      <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
      <?php wp_head(); ?>
         
      <link href='https://fonts.googleapis.com/css?family=Lato:400,900,700' rel='stylesheet' type='text/css'>
   </head>
   <body>
      <div class="hfeed o-site-container" >
        <div class="o-layout-container">
          <header class="c-site-header" role="banner">

            <div class="site-title"><h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a></h1>
            <!-- <div id="site-description"><?php bloginfo( 'description' ); ?></div> -->

         <nav class="c-nav-primary" role="navigation">
            <?php wp_nav_menu( array ('menu_class'=> 'o-list-inline' ) ); ?>

         </nav>
      </header>

      <div id="container">
