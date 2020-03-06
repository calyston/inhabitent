<?php get_header(); ?>
<article class="grid-journal">

<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
  
  <div class="journal-post">
      <div class="journal-post-img">
        <h2><?php the_title(); ?></h2>
        <img src=<?php the_post_thumbnail();?>
        <div class="author">
          <span><?php the_date(); ?> / By <?php the_author(); ?></span>
        </div>
      </div>
      <p id="single-journal-content"><?php the_content(); ?></p>
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
    </div>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<?php get_sidebar();?>
</article>

<?php get_footer();?>