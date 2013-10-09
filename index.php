<?php 
	get_header();

	if (in_category("products")) {

		include("_products.php");

	} else {

		include("404.php");

	}

	get_footer();
?>
