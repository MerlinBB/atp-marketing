<?php get_header(); ?>

<div class="container nopadding">
	
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<article>
			<ul id="welcome-scene">
				<li class="layer layer3" data-depth="0.2"></li>
				<li class="layer layer2" data-depth="0.4"></li>
				<li class="layer layer1" data-depth="0.6"></li>
			</ul>
			<div class="popup">
				<h1 class="heading"><?php the_field("sub_title"); ?></h1>
				<?php the_field("about_text"); ?>
				<div class="popup-actions">
					<a class="btn" href="<?php echo home_url(); ?>/products">Products</a>
					<a class="btn" href="<?php echo home_url(); ?>/case-studies">Case Studies</a>
				</div>
			</div>
		</article>
	<?php endwhile; ?>

</div>

<?php get_footer(); ?>