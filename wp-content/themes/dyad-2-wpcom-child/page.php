<?php
/**
 * The template for displaying all single posts.
 *
 * @package Dyad
 */

 if(is_page(1)) {
  get_header('header-front-page');
 }
 else {
  get_header();
 }
  wp_head();
 ?>


	<main id="primary" class="content-area" role="main">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'page' ); ?>

		<?php endwhile; // End of the loop. ?>

		<?php
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		?>

	</main><!-- #main -->

<?php get_footer(); ?>
