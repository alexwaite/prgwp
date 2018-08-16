<?php /* Template Name: Front Page Template */ ?>
<?php get_header(); ?>


<!-- Normal Page Content Loop -->
<?php
while ( have_posts() ) : the_post();

the_content();

endwhile; // End of the loop.
?>


<!-- Custom Post Type Loop (with 'staff' as the post type 'slug') -->
<?php
$args = array( 'post_type' => 'front-page', 'posts_per_page' => -1 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>

<div class="container-fluid" id="home-container">

    <div class="splash-img" style="background-image: url(&quot;<?php the_field('fp-img'); ?>&quot;);">
        <div class="splashText"><?php the_field('fp-text') ?></div>
    </div>

    <div class="homeBodyText">
      <?php the_field('fp-body') ?>
    </div>

    <div class="btn-box">
        <a> <button type="button" class="btn btn-large lefter" style="background-image: url(&quot;<?php the_field('fp-btn1-img'); ?>&quot;);"><?php the_field('fp-btn1-text') ?></button></a>
        <a> <button type="button" class="btn btn-large righter" style="background-image: url(&quot;<?php the_field('fp-btn2-img'); ?>&quot;);"><?php the_field('fp-btn2-text') ?></button></a>
    </div>

</div>



<!-- end custom port type loop -->
<?php endwhile; ?>


<?php get_footer(); ?>
