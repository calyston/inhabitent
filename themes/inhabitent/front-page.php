<?php get_header();?> 
<div class="hero-home">
  <div id="logo-container">
    <img id="logo-big" src="wp-content/themes/inhabitent/assets/images/logos/inhabitent-logo-full.svg">
  </div>
</div>
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <!-- <h2><?php the_title(); ?></h2> -->
    <?php the_post_thumbnail();?>
    <h3><?php the_permalink();?></h3>
    <h3><?php echo get_template_directory_uri();?></h3>

    <?php the_content(); ?>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>


<section class="home-shop-grid">
<?php
  $terms = get_terms(array(
    'taxonomy' => 'product-type',
    'hide-empty' => false
  ));

  foreach($terms as $term) :
    $file_name = $term->name . '.svg';
    echo "<p>";
    echo $term->name;
    echo "</p>";?>
    <img src='<?php echo get_template_directory_uri() . "/assets/images/product-type-icons/$file_name"?>'>;
  <?php endforeach; ?>
  
;?>
  </section>

<!-- Custom Post Loop Starts -->
<section class="home-journal-grid">
<?php
   $args = array(
    'post_type' => 'post',
    'order' => 'ASC',
    'numberposts' => 3 //returns 3 posts
  );
   $product_posts = get_posts( $args ); //returns an array of posts
?>
<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
   <?php the_title();?>
   <?php the_post_thumbnail();?>
<?php endforeach; wp_reset_postdata(); ?>
</section>
    
<?php get_footer();?>