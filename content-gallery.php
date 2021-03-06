<?php
/**
 * The template used for displaying gallery page content.
 *
 * @package Dinky
 * @since Dinky 1.2
 * @license GNU General Public License v3 or later
 * @copyright (C) 2013  Misam Saki, misam.ir
 * @author Misam Saki,  http://misam.ir/
 */

if ( !defined('ABSPATH')) exit;
?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<?php if ( is_single() ) : ?><h1 class="entry-title"><?php else: ?><h2 class="entry-title"><?php endif; ?><?php if ( is_single() ) : ?><?php the_title(); ?><?php else : ?><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'dinky' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a><?php endif;?><?php if ( is_single() ) : ?></h1><?php else: ?></h2><?php endif; ?>
							<?php if ( !is_single() ) : ?><div class="entry-shortmeta"><?php dinky_entry_shortmeta(); ?> <div class="comments-link"><?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'dinky' ) . '</span>', __( '1 Reply', 'dinky' ), __( '% Replies', 'dinky' ) ); ?></div></div><?php endif; ?>
						</header>
						<?php dinky_post_thumbnail(); ?>
						<div class="entry-content">
							<?php if ( is_single() || !get_post_gallery() ): ?>
								<?php the_content( __( 'Read more <span class="meta-nav">&rarr;</span>', 'dinky' ) ); ?>
								<?php wp_link_pages( array( 'before' => '<nav id="post-nav" class="navigation"><span class="nav-description">' . __( 'Pages', 'dinky' ) . '</span>' , 'after' => '</nav>' ) ); ?>
							<?php else : ?>
								<?php echo get_post_gallery(); ?>
							<?php endif;?>
						</div>
						<?php if ( is_single() ) : ?>
						<footer class="entry-meta">
							<?php dinky_entry_meta(); ?>
							<?php edit_post_link( __( '(Edit)', 'dinky' ), '&nbsp;<span class="edit-link">', '</span>' ); ?>
						</footer>
						<?php get_template_part( 'author-bio' ); ?>
						<?php dinky_posts_nav(); ?>
						<?php endif; ?>
					</article>