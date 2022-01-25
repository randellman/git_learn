<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package best-of-shop
*/

get_header();

?>

	<main id="primary" class="site-main wrapper_main">
		<div class="content">
			<div class="container">
				<div class="breadcrambs breadcrambs-padding">
					<div class="breadcrumbs__item"><a href="/">Home</a></div>
					<div class="breadcrumbs__item"><?php the_title() ?></div>
				</div>
			<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div>
		</div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
