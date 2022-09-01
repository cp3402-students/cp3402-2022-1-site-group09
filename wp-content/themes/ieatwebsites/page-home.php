<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<div class="hero">
	<h1>Cruise Vacations</h1>
</div>

	<div class="container">
    <div class="content">
			<?php
			while ( have_posts() ) : the_post();

      the_content();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

   </div>
	</div><!-- /container -->

<?php
get_footer();
