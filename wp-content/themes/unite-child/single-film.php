<?php get_header(); ?>

<div class="row">
	
	<div class="col-xs-12 col-sm-8">
		
		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					<?php the_title('<h1 class="entry-title">','</h1>' ); ?>
					
					<?php if( has_post_thumbnail() ): ?>
						
						<div class="pull-right"><?php the_post_thumbnail('thumbnail'); ?></div>
				
                    <?php echo  $post->ID;                 endif; ?>
					
					
					
					<?php
						if( current_user_can('manage_options') ) {
							echo '|| ';  edit_post_link(); 
						}
					?></small>  
					
					<?php the_content(); ?>
					
					<hr>
                    <small>Country: <?php $terms = wp_get_post_terms( $post->ID, 'Country' );
                    foreach($terms as $term){
                        echo $term->name;
                    } ?> <br> Genre: <?php $terms = wp_get_post_terms( $post->ID, 'Genre' );
                    foreach($terms as $term){
                        echo $term->name;
                    } ?> <br> Release Date: 
                    <?php echo get_post_meta($post->ID, 'Release Date', true); ?>
                    <br> Ticket Price: 
                    <?php echo get_post_meta($post->ID, 'Ticket Price', true); ?>


					
					<div class="row">
						<div class="col-xs-6 text-left"><?php previous_post_link(); ?></div>
						<div class="col-xs-6 text-right"><?php next_post_link(); ?></div>
					</div>
					
				
				</article>

			<?php endwhile;
			
		endif;
				
		?>
	
	</div>
	
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
	
</div>

<?php get_footer(); ?>