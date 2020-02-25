<?php get_header(); ?>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <h2 id="contact-title"><?php the_title(); ?></h2>
    <h3><?php the_permalink();?></h3>
    <section class="contact">
    <?php the_content(); ?>
    </section>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<?php get_sidebar();?>
<?php get_footer();?>