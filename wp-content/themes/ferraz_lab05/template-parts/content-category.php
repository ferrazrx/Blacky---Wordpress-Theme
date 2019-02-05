<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ferraz_lab05
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if( has_post_thumbnail() ): ?>
		<a href="<?php echo esc_url( get_permalink() ) ?>">
			<figure class="index-img">
				<?php the_post_thumbnail('ferraz_lab05_index_img'); ?>
			</figure>
		</a>
	<?php endif ?>
	<div class="post__content">
		<header class="entry-header">
			<div class="header-info">
				<!-- <?php ferraz_lab05_post_thumbnail(); ?> -->
				<div class="header-text">
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;
					if ( 'post' === get_post_type() ) :
						?>
						<div class="entry-meta">
							<?php
							ferraz_lab05_posted_by();
							ferraz_lab05_posted_on();
							ferraz_lab05_comments_info();
							ferraz_lab05_edit_button();
							?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
				</div><!-- .header-info -->
		</header><!-- .entry-header -->
	
	

	<div class="entry-content">
		<?php
		the_excerpt();
		?>
	</div><!-- .entry-content -->

	<div class="continue-reading">
		<?php 
			$read_more_links = sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ferraz_lab05' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		?>
		<a href="<?php echo esc_url( get_permalink() ) ?>">
			<?php echo $read_more_links ?>
		</a>
	</div>
	</div><!-- .post__content -->
</article><!-- #post-<?php the_ID(); ?> -->
