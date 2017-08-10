<?php get_header(); ?>

<main id="content" class="error404">

	<div class="page-banner-section">
		<div class="center">
			
			<div class="copier-photo"><a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/library/images/copier.png" alt="copier" /></a></div>

			<div class="copier-logo"><h1><a href="<?php echo site_url(); ?>">404 Page Not Found</a></h1></div>

		</div>
	</div>

	<div class="center error404content">
		<div class="formatted">
			<p>Sorry but the requested page could not be found. <a href="<?php echo site_url(); ?>">Click to go Home.</a></p>
		</div>
	</div>

</main>

<?php get_footer(); ?>