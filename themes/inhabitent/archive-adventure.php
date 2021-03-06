<?php get_header(); ?>

<div id="adventure-header">
  <h2 id="adventure-title">Latest Adventures</h2>
</div>


<section class="adventure-grid">
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
      the_post(); ?>
    <div class="adventure-grid-post">
    <img src=<?php the_post_thumbnail();?>
    <h1><?php the_title(); ?></h1>
    <form action=<?php the_permalink();?> method="get">
      <button class="read-more-clear">Read More</button>
    </form>
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