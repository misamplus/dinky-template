<?php
if ( !defined('ABSPATH')) exit;
/**
 * The sidebar containing the 'under-content' widget area.
 *
 * @package Dinky
 * @version 1.3
 * @since Dinky 1.0
 * @license GNU General Public License v3 or later
 * @copyright (C) 2013  Misam Saki, misam.ir
 * @author Misam Saki
 * @website http://en.misam.ir/
 * @email: misamplus@gmail.com
 * @twitter: @misamplus
 */
?>
		<div id="sidebar-under_content" class="sidebar container">
			<?php if ( is_active_sidebar( 'under_content' ) ) : ?>
				<?php dynamic_sidebar( 'under_content' ); ?>
			<?php endif; ?>
		</div>
