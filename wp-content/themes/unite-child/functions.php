<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'Unite-style' for the Unite theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/*
	==========================================
	 Custom Post Type
	==========================================
*/
function film_custom_post_type (){
	
	$labels = array(
		'name' => 'Films',
		'singular_name' => 'Films',
		'add_new' => 'Add FIlm',
		'all_items' => 'All Films',
		'edit_item' => 'Edit Film',
		'new_item' => 'New Film',
		'view_item' => 'View Film',
		'search_item' => 'Search Film',
		'not_found' => 'No Films found',
		'not_found_in_trash' => 'No Films found in trash',
		'parent_item_colon' => 'Parent Item'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		//'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('Films',$args);
}
add_action('init','film_custom_post_type');
function film_custom_taxonomies() {
	

	//add Actors taxonomy NOT hierarchical
	
	register_taxonomy('Actors', 'film', array(
		'label' => 'Actors',
		'rewrite' => array( 'slug' => 'actor' ),
		'hierarchical' => false
    ) );
    	//add Actors taxonomy NOT hierarchical

    register_taxonomy('Actors', 'film', array(
		'label' => 'Actors',
		'rewrite' => array( 'slug' => 'actor' ),
		'hierarchical' => false
    ) );
    register_taxonomy('Actors', 'film', array(
		'label' => 'Actors',
		'rewrite' => array( 'slug' => 'actor' ),
		'hierarchical' => false
	) );
	
}
add_action( 'init' , 'film_custom_taxonomies' );
/*
	==========================================
	Custom Term Function
	==========================================
*/
function awesome_get_terms( $postID, $term ){
	
	$terms_list = wp_get_post_terms($postID, $term); 
	$output = '';
					
	$i = 0;
	foreach( $terms_list as $term ){ $i++;
		if( $i > 1 ){ $output .= ', '; }
		$output .= '<a href="' . get_term_link( $term ) . '">'. $term->name .'</a>';
	}
	
	return $output;
	
}

?>