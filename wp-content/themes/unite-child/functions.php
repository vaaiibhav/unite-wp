<?php
function my_theme_enqueue_styles() {

    $parent_style = 'unite-style'; // This is 'Unite-style' for the Unite child theme.

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
	 FIlm Custom Post Type
	==========================================
*/
function film_custom_post_type (){
	
	$labels = array(
		'name' => 'Films',
		'singular_name' => 'Film',
		'add_new' => 'Add Film',
		'all_items' => 'All Films',
<<<<<<< HEAD
		'add_new_item' => 'Add new Film',
=======
		'add_new_item' => 'Add Film',
>>>>>>> 7548616511eae85dfab5655f97d22966f48f2763
		'edit_item' => 'Edit Film',
		'new_item' => 'New Film',
		'view_item' => 'View Film',
		'search_item' => 'Search Films',
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
            'custom-fields',
		),
		//'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('film',$args);
<<<<<<< HEAD
}
add_action('init','film_custom_post_type');


function film_custom_taxonomies() {
	
	
	
	//add GEnre taxonomy 
	
	register_taxonomy('Genre', 'film', array(
        'label' => 'Genre',
        'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'genre' ),
		'hierarchical' => true
    ) );
    //add Country taxonomy 
	
	register_taxonomy('Country', 'film', array(
        'label' => 'Country',
        'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'country' ),
		'hierarchical' => true
    ) );
      //add Country taxonomy 
	
	register_taxonomy('Year', 'film', array(
        'label' => 'Year',
        'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'year' ),
		'hierarchical' => true
	) );
	  //add Country taxonomy 
	
      register_taxonomy('Actors', 'film', array(
        'label' => 'Actors',
        'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'actors' ),
		'hierarchical' => true
	) );
}
add_action( 'init' , 'film_custom_taxonomies' );

// Add Shortcode
// Add Shortcode
// Add Shortcode
function getfilms_shortcode( $atts ) {
    extract( shortcode_atts( array(

        'slug' => null,
        
        ), $atts ) );
        
        $args = array(
        //'name' => $slug,
        'post_type' => 'film',
        'numberposts' => 5  
        // echo
        );
        
        $post = get_posts( $args );
        foreach($post as $po){
        echo $po->post_title;?>
        <br><?php
//        echo $title;
        }
       // return $title;
}


function register_shortcodes() {
    add_shortcode( 'getfilms', 'getfilms_shortcode' );
}
add_action( 'init', 'register_shortcodes' );

}
add_action('init','film_custom_post_type');


?>