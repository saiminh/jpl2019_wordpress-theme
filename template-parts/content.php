<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JPL_2019
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<a href="<?php the_permalink(); ?>" class="entry-header_thumbnail" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
			<?php // jpl_2019_post_thumbnail(); ?>
		</a>
		<?php
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				jpl_2019_posted_on();
				jpl_2019_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;?>
	</header><!-- .entry-header -->

	

	<div class="entry-content">
		<?php
		if ( is_singular() ) :
			//the_post_thumbnail();
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'jpl_2019' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jpl_2019' ),
				'after'  => '</div>',
			) );
		else :
			//the_content_limit(100);
		endif;
		?> 
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php jpl_2019_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
