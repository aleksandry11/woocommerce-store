<?php get_header(); ?>
    <div class="container content-wrap">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) :
				the_post();

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>