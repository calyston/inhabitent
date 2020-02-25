<?php get_header(); ?>

<section class="product-page">
  <?php if( have_posts() ) :

  //The WordPress Loop: loads post content 
      while( have_posts() ) :
          the_post(); ?>

      <img id="product-img" src="<?php the_post_thumbnail();?>">
      <div class="product-info">
      <h2 id="product-heading"><?php the_title(); ?></h2>
      <span class="price">
      <?php echo '$'.get_field('price');?>
      </span>
      <h3><?php the_permalink();?></h3>
      <?php the_content(); ?>
      </div>
    
      <!-- Loop ends -->
      <?php endwhile;?>

      <?php the_posts_navigation();?>

  <?php else : ?>
          <p>No posts found</p>
  <?php endif;?>
</section>
    
<?php get_footer();?>