<?php
/*
Template Name: Full Width Page
*/
get_header(); ?>

<div class="title">
<h1><?php the_title(); ?></h1>
</h1>

	<div class="container">
    <div class="col-sm-12">
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
    </div>
	</div><!-- /container -->

<?php
get_footer();
