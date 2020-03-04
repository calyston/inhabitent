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
<?php if( is_page(array('About', 'Home')) ){ ?>
    <nav class="white-nav">
    <a href="/inhabitent"><img id="logo-small-white" src="<?php echo get_template_directory_uri();?>/assets/images/logos/inhabitent-logo-tent-white.svg"></a>
    
    <div id="menu-with-search">
    <?php wp_nav_menu(array(
      'theme_location' => 'main'
    )) ;?>

    <div class="header-search">
      <?php get_search_form();?>
    </div>
    </div>
    </nav>

    <?php } else { ?>

    <nav class="green-nav">
    <a href="/inhabitent"><img id="logo-small-green" src="<?php echo get_template_directory_uri();?>/assets/images/logos/inhabitent-logo-tent.svg"></a>
    
    <div id="menu-with-search">
    <?php wp_nav_menu(array(
      'theme_location' => 'main'
    )) ;?>

    <div class="header-search">
      <?php get_search_form();?>
    </div>
    </div>
    </nav>

    <?php } ?>
</header>

