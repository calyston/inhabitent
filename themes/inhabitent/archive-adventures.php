<?php get_header(); ?>
<div id="empty-div"></div>

<section class="adventure-grid">

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
      the_post(); ?>
    <div class="adventure-grid-item">
    <a href="<?php the_permalink();?>"><img src=<?php the_post_thumbnail();?></a>
    <h2><?php the_title(); ?></h2>
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