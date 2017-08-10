<div class="table-section-wrap">
	<div class="center">

		<h2><span class="small"><?php the_field('second_content_section_title_line_1', 108); ?></span><?php the_field('second_content_section_title_line_2', 108); ?></h2>

		<div class="table-section">
			<div class="col col1">
				<div class="title-bar"><?php the_field('table_left_title', 108); ?></div>
				<div class="content-area">
					<ol>

						<?php
						if( have_rows('table_left_list', 108) ):
						    while ( have_rows('table_left_list', 108) ) : the_row(); ?>

						        <li><span><?php the_sub_field('line_item'); ?></span></li>

						    <?php endwhile;
						endif;
						?>

					</ol>
				</div>
			</div>

			<div class="col col2">
				<div class="title-bar"><?php the_field('table_right_title', 108); ?></div>
				<div class="content-area">
					<ol>

						<?php
						if( have_rows('table_right_list', 108) ):
						    while ( have_rows('table_right_list', 108) ) : the_row(); ?>

						        <li><span><?php the_sub_field('line_item'); ?></span></li>

						    <?php endwhile;
						endif;
						?>

					</ol>
				</div>
			</div>

			<div class="clear"></div>
		</div>

	</div>
</div>
