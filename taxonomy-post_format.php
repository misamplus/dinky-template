<?php
if ( !defined('ABSPATH')) exit;
/**
 * The template for displaying Post Format pages.
 *
 * @package Dinky
 * @since Dinky 1.2
 * @license GNU General Public License v3 or later
 * @copyright (C) 2013  Misam Saki, misam.ir
 * @author Misam Saki
 * @website http://en.misam.ir/
 * @email: misamplus@gmail.com
 * @twitter: @misamplus
 */
?>
<?php get_header(); ?>
		<div id="content" class="container" role="main">
			<div id="main"<?php if (!dinky_get_theme_option('sidebar_display')): ?> class="center <?php if (dinky_get_theme_option('fullmain_nosidebar')): ?> full<?php endif; ?>"<?php endif; ?>>
				<?php get_sidebar('up_main'); ?>
				<header class="archive-header">
					<h1 class="archive-title"><?php printf( __( '%s Archives', 'dinky' ), '<span>' . get_post_format_string( get_post_format() ) . '</span>' ); ?></h1>
					<?php if ( category_description() ) : ?>
					<div class="archive-description"><?php echo tag_description(); ?></div>
					<?php endif; ?>
				</header>
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', get_post_format() ); ?>
					<?php endwhile; ?>
					<?php dinky_archive_nav(); ?>
				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif;?>
				<?php get_sidebar('under_main'); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
<?php get_footer(); ?>