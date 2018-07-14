<?php /* Template Name: About Us Test Page Template */ ?>
<?php get_header(); ?>


<h1><?php the_title(); ?></h1>


<!-- Normal Page Content Loop -->
<?php
while ( have_posts() ) : the_post();

the_content();

endwhile; // End of the loop.
?>


<!-- Custom Post Type Loop (with 'gallery' as the post type 'slug') -->
<?php
$args = array( 'post_type' => 'gallery', 'posts_per_page' => 20 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>


	<hr>
	<h2 class="name"><?php the_title(); ?></h2>
	<img src="<?php the_field('image'); ?>">
	<!-- 
	<h3><?php the_field('position'); ?></h3>
	<p><?php the_field('description'); ?></p>
	<a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a>
	<a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a> 
	-->
	<hr>

<!-- end custom port type loop -->
<?php endwhile; ?>


<?php get_footer(); ?>