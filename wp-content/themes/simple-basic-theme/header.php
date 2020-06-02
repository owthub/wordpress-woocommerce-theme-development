<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php echo bloginfo('charset') ?>" />
	<title><?php echo bloginfo('title') ?></title>

  <?php wp_head(); ?>
</head>
<body>
  
  <header>
  	<section class="site-logo">Logo</section>
  	<section class="site-menus">
      <?php
        wp_nav_menu(array(
          "theme_location" => "theme_primary_menu"
        ));
      ?>
  		<!-- <nav>
  			<a href="#">Home</a>
  			<a href="#">About Us</a>
  			<a href="#">Products</a>
  			<a href="#">Contact Us</a>
  		</nav> -->
  	</section>
  </header>