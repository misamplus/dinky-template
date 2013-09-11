<?php
if ( !defined('ABSPATH')) exit;
/**
 * The template for displaying the Footer.
 *
 * @package Dinky
 * @since Dinky 1.0
 * @license GNU General Public License v3 or later
 * @copyright (C) 2013  Misam Saki, misam.ir
 * @author Misam Saki
 * @website http://en.misam.ir/
 * @email: misamplus@gmail.com
 * @twitter: @misamplus
 */
?>
		<?php get_sidebar('under_content'); ?>
		<footer id="footer" role="contentinfo">
			<?php get_sidebar('footer'); ?>
			<div class="copyright">
				<p><?php if (dinky_get_theme_option('copyright') != ''): echo dinky_get_theme_option('copyright'); else: ?><?php printf( __( '&copy; Copyright %s <a href="%s" title="%s">%s</a>', 'dinky' ), (function_exists('jdate') ? jdate('Y') : date('Y')), home_url('/'), get_bloginfo('name', 'display'), get_bloginfo('name') ); ?><?php endif; ?></p>
				<?php 
				/**
 				 * You are free to remove the credit/designer link but I would very much appreciate your support by leaving it intact, thank you.
 				 */
				?>
				<p class="copyright-designer"><?php _e('<strong>Dinky</strong> WordPress Theme - Theme By <a href="http://en.misam.ir/" title="Misam Saki">Misam Saki</a>', 'dinky'); ?></p>
			</div>
			<a href="#wrapper" title="<?php _e('To Top','dinky'); ?>" id="toTop" style="display: inline;"><span id="toTopHover" style="opacity: 0;"></span><?php _e('To Top','dinky'); ?></a>
		<?php wp_footer(); ?>
		</footer>
	</body>
</html>