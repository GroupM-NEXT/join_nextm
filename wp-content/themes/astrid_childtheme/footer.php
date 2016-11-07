<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astrid
 */

?>

		</div>
	</div><!-- #content -->

	<div class="footer-wrapper">
		<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
			<?php get_sidebar('footer'); ?>
		<?php endif; ?>
		
		<?php $toggle_contact = get_theme_mod('toggle_contact_footer', 1); ?>
		<?php if ( $toggle_contact ) : ?>
		<div class="footer-info">
			<div class="container">
				<?php astrid_footer_branding(); ?>
				<?php astrid_footer_contact(); ?>
			</div>
		</div>
		<?php endif; ?>

		<footer id="colophon" class="site-footer" role="contentinfo">	
			<div class="site-info container">
                <div class="row footer-top-container center-element">
					<div class="col-xs-12 footer-column-content">
						<p class="top-footer-text"><b>If you need to contact us, please use the following information</b></p>
						<p class="top-footer-text footer-contact-mail"><a class="mail-to-link" href="mailto:nextmdk@groupm.com"><i class="contact-icon fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>nextmdk@groupm.com</a></p>
						<p class="top-footer-text no-margin-bottom"><i class="contact-icon fa fa-phone fa-lg fa-fw" aria-hidden="true"></i>+45 31667341 (support and contract)</p>
						<p class="top-footer-text"><i class="contact-icon fa fa-phone fa-lg fa-fw" aria-hidden="true"></i>+45 28158832 (technical support)</p>
						
					</div>
				</div>

				<div class="row footer-bottom-container">
					<div class="col-xs-12 footer-column-content">
						<p>©2015 GroupM All rights reserved. WPP – Leaders in Advertising, Marketing & Media</p>

					</div>
				</div>


			</div>

            
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
