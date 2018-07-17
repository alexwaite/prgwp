<?php /* Template Name: Board & Staff Template */ ?>
<?php get_header(); ?>


<h1><?php the_title(); ?></h1>


<!-- Normal Page Content Loop -->
<?php
while ( have_posts() ) : the_post();

the_content();

endwhile; // End of the loop.
?>


<!-- Custom Post Type Loop (with 'staff' as the post type 'slug') -->
<?php
$args = array( 'post_type' => 'staff', 'posts_per_page' => -1 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>


	<hr>

	<div class="card-container clearfix">

		<div class="staff-image">
			<img class="sm_img" src="<?php the_field('sm_img'); ?>">
		</div>

		<div class="staff-card">
			<p class="sm_name"><?php the_field('sm_name'); ?></p>
			<p class="sm_title"><?php the_field('sm_title'); ?></p>
			<p class="sm_bio"><?php the_field('sm_bio'); ?></p>
		</div>

	</div>


	<hr>

<!-- end custom port type loop -->
<?php endwhile; ?>


<?php get_footer(); ?>