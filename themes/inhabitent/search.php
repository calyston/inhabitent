<?php get_header(); ?>
<div id="empty-div"></div>
<?php get_sidebar();?>

<section class="search-page">
<h1>Search Results For: <?php echo esc_html( get_search_query(false) ); ?></h1>

<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    <div class="search-results">
    <h2 id="search-results-title"><?php the_title(); ?></h2>
    <?php the_excerpt(); ?>
    <form action=<?php the_permalink();?> method="get">
      <button class="read-more-journal">Read More →</button>
    </form>
    </div>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>
</section>
<?php get_footer(); ?>