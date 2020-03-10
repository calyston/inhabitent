<?php get_header(); ?>
<div id="empty-div"></div>

<div id='shop-header'>
  <h2 class='shop-title'><?php echo single_term_title(); ?></h2>
</div>




<?php
  $terms = get_terms(array(
    'taxonomy' => 'product-type',
    'hide-empty' => false
  ));

  //Shop Section name/button
  foreach($terms as $term) :
    echo $term->name; 
    echo "<span>$term->description<span>";
    ?>
    <?php endforeach; ?>

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