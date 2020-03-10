<?php get_header(); ?>
<div id="empty-div"></div>

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

        <!--SOCIAL MEDIA BUTTONS -->
        <div class="sns-buttons-journal">
          <form action=<?php the_permalink();?> method="get">
            <button class="sns-individual"><i class="fab fa-facebook-f"></i> Like</button>
          </form>
          <form action=<?php the_permalink();?> method="get">
            <button class="sns-individual"><i class="fab fa-twitter"></i> Tweet</button>
          </form>
          <form action=<?php the_permalink();?> method="get">
            <button class="sns-individual"><i class="fab fa-pinterest"></i> Pin</button>
          </form>
        </div>
    
      <!-- Loop ends -->
      <?php endwhile;?>

      <?php the_posts_navigation();?>

  <?php else : ?>
          <p>No posts found</p>
  <?php endif;?>
</section>
    
<?php get_footer();?>