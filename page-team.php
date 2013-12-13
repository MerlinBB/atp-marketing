<?php get_header(); ?>

<div class="page-title team">
	<div class="container">
        <div class="row">
    		<h1>Who We Are</h1>
        </div>
	</div>
</div>

<div class="container">

    <?php if(get_field('team_members')): ?>
        <ul class="team-members">
            <?php while(has_sub_field('team_members')): ?>
                <li>
                    <img src="<?php the_sub_field('mug_shot'); ?>" alt="" class="scale img-circle mb-1x">
                    <h3 class="subheading text-center"><?php the_sub_field('name'); ?></h3>
                    <p class="text-justify"><?php the_sub_field('bio'); ?></p>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>

</div>
<?php get_footer(); ?>
