<?php /*
Template Name: Home
*/ ?>

<?php get_header(); ?>

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

		<main id="content" class="home">

			<?php get_template_part('pagebanner'); ?>

			<div class="home-main-section">
				<div class="center">

					<div class="formatted">

						<?php the_field('main_content'); ?>

						<div class="cols">
							<div class="col col1">

								<?php
								if( have_rows('services_column_1') ):
								    while ( have_rows('services_column_1') ) : the_row(); ?>

								        <div class="val"><?php the_sub_field('service'); ?></div>

								    <?php endwhile;
								endif;
								?>

							</div>

							<div class="col col2">

								<?php
								if( have_rows('services_column_2') ):
								    while ( have_rows('services_column_2') ) : the_row(); ?>

								        <div class="val"><?php the_sub_field('service'); ?></div>

								    <?php endwhile;
								endif;
								?>

							</div>

							<div class="clear"></div>
						</div>

					</div>

				</div>
			</div>

			<div class="split-cta-section">

				<div class="part gold"></div>
				<div class="part black"></div>

				<div class="center">

					<div class="cols">
						<div class="col col1">
							<h2><?php the_field('cta_1_title'); ?></h2>
							<?php the_field('cta_1_content'); ?>
							<a href="<?php the_field('cta_1_button_url'); ?>" class="btn white"><?php the_field('cta_1_button_text'); ?></a>
						</div>

						<div class="col col2">
							<h2><?php the_field('cta_2_title'); ?></h2>
							<?php the_field('cta_2_content'); ?>
							<a href="<?php the_field('cta_2_button_url'); ?>" class="btn white"><?php the_field('cta_2_button_text'); ?></a>
						</div>

						<div class="clear"></div>
					</div>

				</div>

			</div>

			<?php get_template_part('meterreads'); ?>

		</main>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
