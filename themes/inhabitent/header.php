<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?>>
<!-- <h1><?php bloginfo('name');?></h1> -->
<header>
  <a href="/inhabitent"><img id="logo-small" src="<?php echo get_template_directory_uri();?>/assets/images/logos/inhabitent-logo-tent-white.svg"></a>
  <nav class="main-menu">
    <?php wp_nav_menu(array(
      'theme_location' => 'main'
    )) ;?>
  </nav>
</header>
