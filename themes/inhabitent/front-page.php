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

<h1 class="home-h1">shop stuff</h1>
<section class="home-shop-grid">
<?php
  $terms = get_terms(array(
    'taxonomy' => 'product-type',
    'hide-empty' => false
  ));

  //Shop Section name/button
  foreach($terms as $term) :
    $file_name = $term->name . '.svg';
    echo '<div class="home-shop-grid-items">';
    echo '<button class="green-button"><span>';
    echo $term->name;
    echo ' stuff';
    echo '</button></span>';
    ?>
    <!-- Shop Section info -->
    <?php if($file_name === 'Do.svg') {
      echo "<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>";
    } elseif($file_name === 'Eat.svg') {
      echo "<p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>";
    } elseif($file_name === 'Sleep.svg') {
      echo "<p>Get a good night's rest in the wild in a home away from home that travels well.</p>";
    } elseif($file_name === 'Wear.svg') {
      echo "<p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>";
    } ?>
    <!-- Shop Section icon -->
    <img id="home-shop-icon" src='<?php echo get_template_directory_uri() . "/assets/images/product-type-icons/$file_name";?>'>
    </div>
    <?php endforeach; ?>
  </section>

  <!-- if term name === do/eat/sleep/wear then echo relevant paragraph-->


<h1 class="home-h1">inhabitent journal</h1>
<!-- Custom Post Loop Starts -->
<section class="home-journal-grid">
<?php
   $args = array(
    'post_type' => 'post',
    'order' => 'DESC',
    'numberposts' => 3 //returns 3 posts
  );
   $product_posts = get_posts( $args ); //returns an array of posts
?>


<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
<div class="home-journal-grid-items">
  <?php the_post_thumbnail();?>
   <p><?php the_date(); ?> / By <?php the_author(); ?></p>
   <h2><?php the_title();?></h2>
   <button class="read-entry">Read Entry</button>
</div> 
<?php endforeach; wp_reset_postdata(); ?>
 
</section>

<h1 class="home-h1">latest adventures</h1>
<!-- Custom Post Loop Starts -->
<!-- <section class="home-adventure-grid">
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
</section> -->

<?php get_footer();?>