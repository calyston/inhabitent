<?php get_header(); ?>

<section class="single-adventure-page">
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <img src=<?php the_post_thumbnail();?>
    <h2><?php the_title(); ?></h2>
    <span>By <?php the_author(); ?></span>
    <?php the_content(); ?>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>
<?php get_footer();?>