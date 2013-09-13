<?php get_header(); ?>

<?php //query_posts( 'posts_per_page=1' );?>

<?php if ( have_posts() ): ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <article>
  	<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	  the_post_thumbnail();
  	} ?>
			<?php if ( $wp_query->max_num_pages > 1 ) : ?>
			  <div class="prev">
			    <?php next_posts_link( __( '&larr; Older posts' ) ); ?>
			  </div>
			  <div class="next">
			    <?php previous_posts_link( __( 'Newer posts &rarr;' ) ); ?>
			  </div>
			<?php endif; ?>	
	<div class="article-content">
	    <h1>
	      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	    </h1>
	    <?php 
	    	if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>');
	    ?>
	    <?php edit_post_link('Edit','','<strong>|</strong>'); ?>
	    
	    <span class="category"><?php the_category(', ') ?></span>
	    <?php the_content(); ?>
	    <span class="tags"><?php the_tags( "#", " #", $after ); ?></span>
	</div>
  </article>
  <?php endwhile; wp_reset_query(); ?>
<?php else: ?>
  <h2>No posts found</h2>
<?php endif; ?>


<?php get_footer(); ?>