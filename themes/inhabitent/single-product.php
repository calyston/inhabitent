<?php get_header(); ?>

<section class="product-page">
  <?php if( have_posts() ) :

  //The WordPress Loop: loads post content 
      while( have_posts() ) :
          the_post(); ?>

      <img id="product-img" src=<?php the_post_thumbnail();?>
      <div class="product-info">
        <h2 id="product-heading"><?php the_title(); ?></h2>
        <h3 class="price">
        <?php echo '$'.get_field('price');?>
        </h3>
        <div id="product-content">
          <?php the_content(); ?>
        </div>
      </div>
    
      <!-- Loop ends -->
      <?php endwhile;?>

      <?php the_posts_navigation();?>

  <?php else : ?>
          <p>No posts found</p>
  <?php endif;?>
</section>
    
<?php get_footer();?>