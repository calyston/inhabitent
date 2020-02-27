<?php get_header(); ?>

<div id="shop-header">
  <h2 class="shop-title">Shop Stuff</h2>
  <ul id="shop-links">
    <a href="#"><li>Do</li></a>
    <a href="#"><li>Eat</li></a>
    <a href="#"><li>Sleep</li></a>
    <a href="#"><li>Wear</li></a>
  </ul>
</div>

<section class="shop-grid">

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
      the_post(); ?>
    <div class="shop-item">
    <a href="<?php the_permalink();?>"><img src=<?php the_post_thumbnail();?></a>
    
    <span class="archive-product-info">
      <p class="archive-product-title"><?php the_title(); ?></p>
      <p class="archive-product-price"><?php echo '$'.get_field('price');?></p>
    </span>
    <!-- <h3><?php the_permalink();?></h3> -->
    <!-- <?php the_content(); ?> -->
    </div>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>
    <?php wp_reset_postdata(); ?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>
</section>
    
<?php get_footer();?>