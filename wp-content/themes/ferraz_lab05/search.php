<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Ferraz_lab05
 */

get_header();
?>

	<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'ferraz_lab05' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->
	<?php endif; ?>

	<header class="page-header">
		<h1 class="page-title">
			<?php 
			if( is_404() ){
				esc_html_e('Page not found!', 'ferraz_lab05');
			}else if(is_search()){
				/* Translator: %s = search query */
				printf( esc_html__( 'Nothing Found for: %s', 'ferraz_lab05' ), '<span>' . get_search_query() . '</span>' );
			}	
			?>
		</h1>
	</header><!-- .page-header -->
	
	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
