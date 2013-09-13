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
		<div class="large-4 columns">
			<header>
				<h1>
					<a href="<?php echo home_url( '/' ); ?>"><?php bloginfo('name'); ?></a>
				</h1>
				<h2>
					<a href="<?php echo home_url( '/' ); ?>"><?php bloginfo('description'); ?></a>
				</h2>
			</header>
			<nav>
				<?php get_sidebar(); ?>
				<?php 
				  // Uncomment to show menu
				  // wp_nav_menu( array( 'menu' => 'Main' ) );
				?>
			</nav>
		</div>
		<div class="large-8 columns">
			<section>
			<?php if ( $wp_query->max_num_pages > 1 ) : ?>
			  <div class="prev">
			    <?php next_posts_link( __( '&larr; Older posts' ) ); ?>
			  </div>
			  <div class="next">
			    <?php previous_posts_link( __( 'Newer posts &rarr;' ) ); ?>
			  </div>
			<?php endif; ?>