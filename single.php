<?php 
	get_header();
		if ( have_posts() ) while ( have_posts() ) : the_post();

			if ( in_category("products") || in_category("case-studies") ) {
				include("_slider.php");
			} else {
				include("404.php");
			}
		
		endwhile;
	get_footer(); 
?>