<?php /*
Template Name: Meter Read Table Template
*/ ?>

<?php get_header(); ?>

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

		<main id="content" class="formpage">

			<?php get_template_part('pagebanner'); ?>

			<div class="white-formatted-wrap">
				<div class="center">

					<?php the_content(); ?>

				</div>
			</div>

		</main>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
