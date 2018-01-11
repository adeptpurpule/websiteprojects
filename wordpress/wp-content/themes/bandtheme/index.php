<?php /* Template Name: CustomPageT1 */ ?>
<?php



include "header.php"; ?>

	<div class="row page_wrap" style="margin-top:-2px">
     <!-- page wrap -->
     <div class="twelve columns">
      <!-- page wrap -->
      
       
     

      <div class="row">
        <div class="twelve columns">
        
        <div class="blog_post"><!-- Begin Blog Post --> 
              <div class="heading_dots_grey  hide-for-smal"><h1 class="heading_supersize" style="margin-bottom:0"><span class="heading_bg">
 
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->
      </div><!-- END blog post -->

  </div><!-- END row blog -->
        

<?php include "footer.php" ?>
