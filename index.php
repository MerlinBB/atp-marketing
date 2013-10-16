<?php 
	get_header();

	if (in_category("products")) {

		include("_products.php");

	} elseif (in_category("case-studies")) {

		include("_case-studies.php");

	} else {

		include("404.php");

	}

	get_footer();
?>
