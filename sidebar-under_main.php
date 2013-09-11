<?php
if ( !defined('ABSPATH')) exit;
/**
 * The sidebar containing the Under Main Widgets Area.
 *
 * @package Dinky
 * @since Dinky 1.5
 * @license GNU General Public License v3 or later
 * @copyright (C) 2013  Misam Saki, misam.ir
 * @author Misam Saki
 * @website http://en.misam.ir/
 * @email: misamplus@gmail.com
 * @twitter: @misamplus
 */
?>
				<?php if ( is_active_sidebar( 'under_main' ) ) : ?>
				<div id="sidebar-under_main" class="sidebar">
						<?php dynamic_sidebar( 'under_main' ); ?>
				</div>
				<?php endif; ?>