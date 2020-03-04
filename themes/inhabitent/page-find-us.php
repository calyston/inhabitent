<?php get_header(); ?>
<article class="grid-find">
<section id="contact-page">
<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <h2 id="contact-title"><?php the_title(); ?></h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.683305088022!2d-123.1403568847366!3d49.26344827932916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac457%3A0x3aea6428fa30dc6a!2s1490%20W%20Broadway%2C%20Vancouver%2C%20BC%20V6H%204E8!5e0!3m2!1sen!2sca!4v1583176524586!5m2!1sen!2sca" width="750" height="375" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    <section class="contact">
    <p><?php the_content(); ?></p>
    </section>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>
</section>
<?php get_sidebar();?>
</article>

<?php get_footer();?>