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
		<div class="large-3 small-3 columns">
			<div>
			<header>

				<div class="show-for-small ">
				      <img class="logo" src="<?php bloginfo('template_directory');?>/imgs/bc-logo.png" width="60" height="60" alt="BC" />
				</div>


				<a href="<?php echo home_url( '/' ); ?>" class="logo" >
				      <img class="logo" src="<?php bloginfo('template_directory');?>/imgs/bc-logo.png" width="60" height="60" alt="BC" />
				</a>
				<h1>
					<a href="<?php echo home_url( '/' ); ?>"><?php bloginfo('name'); ?></a>
				</h1>
				<h2>
					<a href="<?php echo home_url( '/' ); ?>"><?php bloginfo('description'); ?></a>
				</h2>
			</header>
			<nav>
				
				<?php 
				  // Uncomment to show menu
				  wp_nav_menu( array( 'menu' => 'Main' ) );
				?>
				<?php get_sidebar(); ?>
			</nav>
			</div>
		</div>
		<div class="large-9 small-9 columns">
			<section>
