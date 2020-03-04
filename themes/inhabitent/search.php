<?php get_header(); ?>
<div id="empty-div"></div>
<?php get_sidebar();?>

<h1>Search Results For: <?php echo esc_html( get_search_query(false) ); ?></h1>

<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    <div class="search-results">
    <h2><?php the_title(); ?></h2>
    <img src=<?php the_post_thumbnail();?>
    <h3><?php the_permalink(); ?></h3>
    <p><?php the_content(); ?></p>
    </div>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<?php get_footer(); ?>