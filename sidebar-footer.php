<?php
if ( !defined('ABSPATH')) exit;
/**
 * The sidebar containing the Footer Widgets Area.
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
			<?php if ( is_active_sidebar( 'footer' ) ) : ?>
			<div id="sidebar-footer" class="sidebar container">
				<?php dynamic_sidebar( 'footer' ); ?>
			</div>
			<?php endif; ?>