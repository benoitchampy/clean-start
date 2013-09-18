<?php
if ( function_exists( 'add_theme_support' ) ):
  add_theme_support( 'menus' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );
endif;

show_admin_bar(false);


if ( function_exists('register_sidebars') ):
  register_sidebar(array(
    'name'=>'Sidebar',
    'before_title'=>'<h4>',
    'after_title'=>'</h4>'
  ));
endif;

add_editor_style( 'editor-style.css' );

function my_init_method() {
  if (is_admin() == false ):
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js');
    wp_enqueue_script( 'jquery' );
  endif;
}

function add_opengraph_doctype( $output ) {
    return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
}
add_filter('language_attributes', 'add_opengraph_doctype');


function insert_opengraph_in_head() {
         
    global $post;
    if ( !is_singular()) // On vérifie si nous somme dans un article ou une page
	return;
        
    echo '<meta property="og:title" content="' . get_the_title() . '"/>';
    echo '<meta property="og:type" content="article"/>';
    echo '<meta property="og:url" content="' . get_permalink() . '"/>';
    echo '<meta property="og:description" content="' .strip_tags(get_the_excerpt()) . '" />';
    echo '<meta property="og:site_name" content="NOM DE MON SITE"/>';
 
    $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ) );
    echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
    echo '<link rel="image_src" href="'. esc_attr( $thumbnail_src[0] ) . '" />';
}
add_action( 'wp_head', 'insert_opengraph_in_head', 5 );


    
add_action('init', 'my_init_method');
?>
