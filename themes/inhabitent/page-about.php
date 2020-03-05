<?php get_header(); ?>


<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <div class="hero-about">
    <!-- style="background-image: (url: <?php get_the_post_thumbnail_url();?>)"> -->
    <h2><?php the_title(); ?></h2>
    </div>

    <section class="about">
    <?php the_content(); ?>
    </section>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>


<?php get_footer();?>