<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
 echo'<div id="bannerhead"></div>'; 
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?> >

 <nav class="menu">      
  <ul>
    <li><a href="../wordpress">Home</a></li>
    <li><a href="http://shackles-noise.blogspot.com.au/">Blog</a></li>
	 <li class="sub-menu"><a href="#">Merch</a><ul>    
    <li><a href="https://shacklesnoise.bandcamp.com/merch">Bandcamp</a></li>
	<li><a href="http://castigatedrecords.bigcartel.com/">Castigated Records</a></li>
	<li><a href="http://www.resistrecords.com/bands/shackles/">Resist Records</a></li>
	</li>
	</ul>
    <li><a href="https://shacklesnoise.bandcamp.com/">Music</a></li>

  </ul>
</nav><!--/menu--> 
<div id="page" class="hfeed site">
	
 <div class="row page_wrap" style="margin-top:-2px">
     <!-- page wrap -->
     <div class="twelve columns">
      <!-- page wrap -->
      
       
     

      <div class="row">
        <div class="twelve columns">
        
        <div class="blog_post">
	
									
							
			</div><!-- .site-branding -->
			</div>
			
	

        </div>
      
		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->
       
	<div id="content" class="site-content">

</div>
        



	
