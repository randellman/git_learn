<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package best-of-shop
 */

get_header();

$get = $_GET;
$term_id = $post = $term_content = '';
$post_arg = [];
$posts = [];
$term_children = [];

if(!$get){
    $term_children = get_terms(
        'helpcenter_category',
        array(
            'parent' => 0,
        )
    );

}elseif(isset($get['post_id']) && (int)$get['post_id']){
    $post  = get_post((int)$get['post_id']);
}elseif(isset($get['term_id'])){
    $term_id = (int)$get['term_id'];

    $post_arg = [
        'post_type' => 'helpcenter',
        'posts_per_page' => 15,
        'tax_query' => array(
            array(
                'taxonomy' => 'helpcenter_category',
                'field' => 'term_id',
                'terms' => $term_id,
                'include_children' => true
            )
        )
    ];

    $term_children = get_terms(
        'helpcenter_category',
        array(
            'parent' => $term_id,
        )
    );

    $term_content = carbon_get_term_meta( $term_id, 'term_content', $type = null );

}

?>




    <div class="wrapper_main">
        <main class="content">
            <section class = "<?php echo (isset($_GET['post_id']))?'help-center':'' ?> <?php echo $term_content?'contact-us':'' ?> question-page">
                <div class = "container">
                    <div class = "breadcrambs breadcrambs-padding">
                        <div class="breadcrumbs__item"><a href="#">Home</a></div>
                        <div class="breadcrumbs__item"><a href="#">Help Center</a></div>
                        <div class="breadcrumbs__item"><a href="#">Coupons & Bonuses</a></div>
                        <div class="breadcrumbs__item">Reward Coupons</div>
                    </div>

                    <div class = "help-center-content row-content">
                        <strong>Help Center</strong>
                        <form class = "search">
                            <input type = "search" class = "input" placeholder = "Enter question/keyword to find answers">
                            <button type = "submit" class = "button">
                                <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/search-loupe.svg" alt = "search-icon">
                            </button>
                        </form>
                    </div>

                    <div class = "question-page-info">
                        <div class = "left-side">
                            <?php
                                $args = ['args' => [ 'orderby' => 'meta_value_num', 'hide_empty' => false ,'order' => 'ASC', 'meta_query' => [[ 'key' => '_term_order',  'type' => 'NUMERIC', ]] ] ];
                                $menus = Functions_SK::get_taxonomy_hierarchy('helpcenter_category' , 0 , $args );
                                get_template_part( 'template-parts/help-center-left', 'menu', ['menus'=>$menus] );
                            ?>
                        </div>
                        <div class = "right-side help_center_content_wrp">

                            <?php
                            get_template_part( 'template-parts/help-center', 'content', ['post'=>$post , 'term_content'=>$term_content , 'terms'=>$term_children ,'post_arg'=>$post_arg , 'term_id'=> $term_id  , 'posts'=>$posts] );
                            ?>






                            <a href = "#" type="button" class="callback-bt">
                                <div class="img-call">
                                    <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/call-icon.svg">
                                </div>
                            </a>

                        </div>


                    </div>
                </div>
    </div>



<?php if(false){ // work template  ?>
	<main data-template="archive-helpcenter" id="primary" class="site-main">
        <div class="help_center_right_menu">
            <?php
            $args = ['args' => [ 'orderby' => 'meta_value_num', 'hide_empty' => false ,'order' => 'ASC', 'meta_query' => [[ 'key' => '_term_order',  'type' => 'NUMERIC', ]] ] ];
            $menus = Functions_SK::get_taxonomy_hierarchy('helpcenter_category' , 0 , $args );
                get_template_part( 'template-parts/help-center-left', 'menu', ['menus'=>$menus] );
            ?>
        </div>

        <div>
            <div><?php get_search_form(['echo'=>true])?></div>
            <div class="help_center_content_wrp">
                <?php
                    get_template_part( 'template-parts/help-center', 'content', ['post'=>$post , 'term_content'=>$term_content , 'terms'=>$term_children ,'post_arg'=>$post_arg , 'term_id'=> $term_id  , 'posts'=>$posts] );
                ?>
            <div>
        <div>

            <?php if ( have_posts() ) : ?>

			<header  class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
?>
<?php } // false ?>



<?php
get_footer();
