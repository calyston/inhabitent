<?php get_header(); ?>
<div id="empty-div"></div>
<?php get_sidebar();?>

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
      <!-- <h3><?php the_permalink();?></h3> -->
      <?php the_content(); ?>
    </div>
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<?php get_footer();?>