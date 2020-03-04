<?php get_header(); ?>

<section class="about-page">
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <img src=<?php the_post_thumbnail();?>
    <h2><?php the_title(); ?></h2>
    <?php the_author(); ?>
    <h3><?php the_permalink();?></h3>
    <?php the_content(); ?>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>
<?php get_footer();?>