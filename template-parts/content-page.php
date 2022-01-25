<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package best-of-shop
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
	
	<?php //best_of_shop_post_thumbnail(); ?>

	<div class="entry-content right-side">
		<div class="default_title">
			<strong><?php the_title() ?></strong>
		</div>

		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'best-of-shop' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if(false) { ?>
		<?php if ( get_edit_post_link() ) : ?>
			<footer class="entry-footer">
				<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'best-of-shop' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					),
					'<span class="edit-link">',
					'</span>'
				);
				?>
			</footer><!-- .entry-footer -->
		<?php endif; ?>
	<?php } ?>
</div><!-- #post-<?php the_ID(); ?> -->
