<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package elexicon
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="container">
			<div class="col-md-12">
				<div class="row">
					<?php while ( have_posts() ) : the_post(); ?>

						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>

					<?php endwhile; // End of the loop. ?>
				</div>
			</div>
		</div><!-- .container -->
	</div><!-- #primary -->
<?php
get_footer();
