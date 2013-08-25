<?php
if ( !defined('ABSPATH')) exit;
/**
 * The sidebar containing the 'up-main' widget area.
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
				<div id="sidebar-up_main" class="sidebar">
					<?php if ( is_active_sidebar( 'up_main' ) ) : ?>
						<?php dynamic_sidebar( 'up_main' ); ?>
					<?php endif; ?>
				</div>
