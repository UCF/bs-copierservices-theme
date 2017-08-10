<?php /*
Template Name: Meter Reads
*/ ?>

<?php get_header(); ?>

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

		<main id="content" class="formpage">

			<?php get_template_part('pagebanner'); ?>

			<div class="black-formatted-wrap">
				<div class="center">

					<div class="formatted">
						<h2><?php the_field('content_second_title'); ?></h2>
						<?php the_field('main_content'); ?>
						<div class="special"><?php the_field('extra_line'); ?></div>
					</div>

					<div class="report-img">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/report-img.png" alt="Report Problems Online at ucfcopiers.com" />
					</div>

					<div class="clear"></div>

				</div>
			</div>

			<?php // meter reads table section ?>
			<?php get_template_part('meterreads'); ?>

			<div class="white-formatted-wrap">
				<div class="center">

					<?php the_content(); ?>

				</div>
			</div>

		</main>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
