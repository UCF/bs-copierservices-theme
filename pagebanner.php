<div class="page-banner-section">
	<div class="center">

		<div class="copier-photo"><a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/library/images/copier.png" alt="copier" /></a></div>

		<div class="copier-logo">

			<?php if( is_front_page() ) { ?>

				<a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/library/images/home-logo.png" alt="copier services and support" /></a>

			<?php } else { ?>
				
				<a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/library/images/home-logo.png" alt="copier services and support" /></a>
				<h1><a href="<?php echo site_url(); ?>"><?php the_title(); ?></a></h1>

			<?php } ?>

		</div>

	</div>
</div>
