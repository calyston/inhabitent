<div class="hero-home">
  <?php get_header(); ?>
  <img id="logo-big" src="wp-content/themes/inhabitent/assets/images/logos/inhabitent-logo-full.svg">
  <img id="logo-small" src="wp-content/themes/inhabitent/assets/images/logos/inhabitent-logo-tent-white.svg">
</div>
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <h2><?php the_title(); ?></h2>
    <h3><?php the_permalink();?></h3>
    <?php the_content(); ?>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>