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
    <div class="sns-buttons">
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
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>
<?php get_footer();?>