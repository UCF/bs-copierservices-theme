<?php /*
Template Name: Print Drivers
*/ ?>

<?php get_header(); ?>

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

		<main id="content" class="drivers">

			<?php get_template_part('pagebanner'); ?>

			<div class="split-cta-section">

				<div class="part gold"></div>
				<div class="part black"></div>

				<div class="center">

					<div class="cols">
						<div class="col col1">
							<h2><?php the_field('cta_1_title'); ?></h2>
							<?php the_field('cta_1_content'); ?>
							<a href="<?php the_field('cta_1_button_url'); ?>" class="btn white" target="_blank"><?php the_field('cta_1_button_text'); ?></a>
						</div>

						<div class="col col2">
							<h2><?php the_field('cta_2_title'); ?></h2>
							<?php the_field('cta_2_content'); ?>
							<a href="<?php the_field('cta_2_button_url'); ?>" class="btn white" target="_blank"><?php the_field('cta_2_button_text'); ?></a>
						</div>

						<div class="clear"></div>
					</div>

				</div>

			</div>

		</main>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
