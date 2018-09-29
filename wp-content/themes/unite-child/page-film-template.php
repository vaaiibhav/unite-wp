<?php 
	
/*
	Template Name: Film Template
*/
	
get_header(); ?>

	<?php 
		
	$args = array('post_type' => 'film', 'post_per_page' => 5 );
	$loop = new WP_Query( $args );
	
	if( $loop->have_posts() ):
		
		while( $loop->have_posts() ): $loop->the_post(); ?>
			
			<?php get_template_part('content', 'archive'); ?>
		
		<?php endwhile;
		
	endif;
		
	wp_reset_postdata();
	function get_the_ID() {
		$post = get_post();
		return ! empty( $post ) ? $post->ID : false;
	}
	?>

<?php get_footer(); ?>