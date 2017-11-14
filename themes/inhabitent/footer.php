<?php
/**
 * The template for displaying the footer.
 *
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">

				<div class="footer-background-image" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/dark-wood.png');">

				<div class="site-info">
					<div class="contact-info">
						<h3>contact info</h3>
						<p><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
						<p><i class="fa fa-phone" aria-hidden="true"></i>778-456-7891</p>
						<p><i class="fa fa-facebook-square" aria-hidden="true"></i><i class="fa fa-twitter-square" aria-hidden="true"></i><i class="fa fa-google-plus-square" aria-hidden="true"></i></p>
					</div>

					<div class="business-hours">
						<h3>business hours</h3>
						<p><span class="text-bold">Monday - Friday:</span> 9am to 5pm</p>
						<p><span class="text-bold">Saturday:</span> 10am to 2pm</p>
						<p><span class="text-bold">Sunday:</span> Closed</p>
					</div>

					<div class="footer-image">
						<a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/logos/inhabitent-logo-text.svg"></a>
					</div>

				</div><!-- .site-info -->
				<div class="footer-copyright">
				<p>copyright &copy 2017 inhabitent</p>
			</div>
			</div>
			
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
