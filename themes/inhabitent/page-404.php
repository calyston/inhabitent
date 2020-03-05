<?php get_header(); ?>

<h1>You landed on a broken page</h1>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <img src=<?php the_post_thumbnail();?>
        <h3><?php the_permalink();?></h3>
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<?php get_footer();?>