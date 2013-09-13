<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
  <?php
    if( ! is_home() ):
      wp_title( '|', true, 'right' );
    endif;
    bloginfo( 'name' );
  ?>
</title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="row">
		<div class="large-12">
			<a href="<?php echo home_url( '/' ); ?>"><?php bloginfo('name'); ?></a>
			<a href="<?php echo home_url( '/' ); ?>"><?php bloginfo('description'); ?></a>
			<?php 
			  // Uncomment to show menu
			  // wp_nav_menu( array( 'menu' => 'Main' ) );
			?>