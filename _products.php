<?php get_header(); ?>
	
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="slidecontainer">
		<article class="product slider">

				<div class="slide">
					<div class="row">
						<div class="col-r-6">
							<img src="<?php the_field("hero_image"); ?>" alt="screen grab of <?php the_title(); ?>" class="scale">
						</div>
						<div class="col-r-6">
							<h1 class="heading"><?php the_title(); ?></h1>
							<h2 class="subheading"><?php the_field("subtitle"); ?></h2>
							<?php the_field("main_description"); ?>
							<button class="moveslideshow" data-destination="1">Read More</button>
						</div>
					</div>
				</div>

				<div class="slide">
					<div class="row">
						<div class="col-r-6">
							<h1 class="heading"><?php the_title(); ?></h1>
							<h2 class="subheading"><?php the_field("subtitle"); ?></h2>
							<div class="row">
								<div class="col-6">
									<img src="<?php the_field("highlight_feature_1_image"); ?>" alt="icon" class="scale img-circle mb-1x">
									<h3 class="subheading"><?php the_field("highlight_feature_1_title"); ?></h3>
									<?php the_field("highlight_feature_1_description"); ?>
								</div>
								<div class="col-6">
									<img src="<?php the_field("highlight_feature_2_image"); ?>" alt="icon" class="scale img-circle mb-1x">
									<h3 class="subheading"><?php the_field("highlight_feature_2_title"); ?></h3>
									<?php the_field("highlight_feature_2_description"); ?>
									<button class="moveslideshow" data-destination="0">Back</button>
								</div>
							</div>
						</div>

						<div class="col-r-6">
							<div class="popup">
								<h3 class="subheading">Features</h3>
								<?php if(get_field("feature_list")): ?>
									<ul class="list-features">
										<?php while(has_sub_field("feature_list")): ?>
											<li>
												<h4 class="feature-title"><?php the_sub_field('feature_title'); ?></h4>
												<?php the_sub_field("feature_description"); ?>
											</li>
										<?php endwhile; ?>
									</ul>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
		</article>
	</div>
	<?php endwhile; ?>
	
	<?php if (  $wp_query->max_num_pages > 1 ) : ?>
		<nav class="postnav" class="group">
			<span class="prev"><?php previous_posts_link( __( '&#9756; More Recent Posts') ); ?></span>
			<span class="next"><?php next_posts_link( __( 'Older Posts &#9758;') ); ?></span>
		</nav>
	<?php endif; ?>

<?php get_footer(); ?>
