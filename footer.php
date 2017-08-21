</div>	<!-- site wrap -->

	<div id="footer">
		<div class="footer-top">
			<div class="center">

				<div class="footer-logo"><img src="<?php bloginfo('template_directory'); ?>/library/images/home-logo.png" alt="copier services and support" /></div>

				<?php wp_nav_menu(array(
					'theme_location' => 'main-nav',
					'container' => ''
				)); ?>

				<div class="clear"></div>

			</div>
		</div>

		<div class="footer-bottom">
			<div class="center">

				<div class="copy"><?php the_field('footer_copy', 108); ?></div>

			</div>
		</div>

	</div>

	<?php wp_footer(); ?>

</body>
</html>
