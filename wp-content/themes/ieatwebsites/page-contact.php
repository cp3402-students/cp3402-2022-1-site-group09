<?php
/*
Template Name: Contact
*/
get_header(); ?>

<div class="title">
<h1><?php the_title(); ?></h1>
</div>

	<div class="container">

   <div class="col-sm-8">
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

	<div class="col-sm-4">
		<div class="sidebar">
   <?php dynamic_sidebar( 'contact-sidebar' ); ?>
   </div>
 </div>

 </div><!-- /container -->


<?php
get_footer();
