<?php get_header(); ?>
	
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="slidecontainer">
		<article class="case-study slider">
			<div class="row">
				<div class="col-6">
					<div class="row">
						<div class="col-r-6">
							<img src="http://placehold.it/453x300" alt="" class="scale">
						</div>
						<div class="col-r-6">
							<h1 class="heading"><?php the_title(); ?></h1>
							<h2 class="subheading">Subtitle</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, saepe, iusto consectetur perspiciatis repellat cum ratione culpa labore accusantium reprehenderit molestiae iste et nam nisi vel dolorum autem id architecto odio libero totam impedit quas! Provident, ipsa, nisi, fugit, dolores pariatur ipsum sunt hic repellendus odio quae odit quos quasi.</p>
							<button class="moveslideshow" data-destination="1">Read More</button>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="row">
						<div class="col-r-6">
							<h1 class="heading"><?php the_title(); ?></h1>
							<h2 class="subheading">Subtitle</h2>
							<div class="row">
								<div class="col-6">
									<img src="http://placehold.it/209x209" alt="" class="scale img-circle mb-1x">
									<h3 class="subheading">Feature title</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt quisquam iusto illum dolor accusantium quasi accusamus repellendus in dicta ipsa!</p>
								</div>
								<div class="col-6">
									<img src="http://placehold.it/209x209" alt="" class="scale img-circle mb-1x">
									<h3 class="subheading">Feature title</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quidem, expedita nisi magnam tempora iste voluptatem cum maxime vero repellendus.</p>
									<button class="moveslideshow" data-destination="0">Back</button>
								</div>
							</div>
						</div>
						<div class="col-r-6">
							<div class="popup">
								<h3 class="subheading">Features</h3>
								<ul class="list-features">
									<li>
										<h4 class="feature-title">Feature Title</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod consequuntur numquam nobis quis possimus quae.</p>
									</li>
									<li>
										<h4 class="feature-title">Feature Title</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod consequuntur numquam nobis quis possimus quae.</p>
									</li>
									<li>
										<h4 class="feature-title">Feature Title</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod consequuntur numquam nobis quis possimus quae.</p>
									</li>
								</ul>
							</div>
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
