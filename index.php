<?php get_header(); ?>

<?php if ( have_posts() ): ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <article>
    <h1>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h1>
    <?php 
    	if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>');
    	?>
    <?php the_content(); ?>
  </article>
  <?php endwhile; wp_reset_query(); ?>
<?php else: ?>
  <h2>No posts found</h2>
<?php endif; ?>


<?php get_footer(); ?>