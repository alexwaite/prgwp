<?php /* Template Name: Team Members Page Template */ ?>
<?php get_header(); ?>


<h1><?php the_title(); ?></h1>


<!-- Normal Page Content Loop -->
<?php
while ( have_posts() ) : the_post();

the_content();

endwhile; // End of the loop.
?>


<!-- Custom Post Type Loop (with 'team' as the post type 'slug') -->
<?php
$args = array( 'post_type' => 'team', 'posts_per_page' => -1 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>


	<hr>
	<h2 class="name"><?php the_title(); ?></h2>
	<img src="<?php the_field('tm_img'); ?>">
	<h3><?php the_field('tm_name'); ?></h3>
	<h4><?php the_field('tm_title'); ?></h4>
	<p><?php the_field('tm_bio'); ?></p>

	<hr>

<!-- end custom port type loop -->
<?php endwhile; ?>


<?php get_footer(); ?>