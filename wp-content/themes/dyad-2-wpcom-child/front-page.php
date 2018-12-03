<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dyad
 */

get_header(); ?>


	<main id="primary" class="content-area" role="main">

    <div class="intro-p">
     <div id="primary-intro" class="intro primary-sidebar widget-area">
     		<?php dynamic_sidebar( 'home_intro' ); ?>
     	</div>
   </div><!-- #primary-introduction -->

		<?php if ( have_posts() ) : ?>

			<div id="posts" class="posts">

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'blocks' );
					?>

				<?php endwhile; ?>

			</div><!-- .posts -->

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<div id="posts" class="posts">
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
			</div>



		<?php endif; ?>

	</main><!-- #main -->

<div class="mis-wrapper">
  <div class="mission">

    <?php dynamic_sidebar( 'home_mission' ); ?>

    <ul class="goal-pillars">
      <li class="goal-pillar goal-pillar--food">
         <?php dynamic_sidebar( 'goal-pillar--food' ); ?>
       </li>
      <li class="goal-pillar goal-pillar--climate">
        <?php dynamic_sidebar( 'goal-pillar--climate' ); ?>
      </li>
      <li class="goal-pillar goal-pillar--fresh-water">
        <?php dynamic_sidebar( 'goal-pillar--fresh-water' ); ?>
	     </li>
      <li class="goal-pillar goal-pillar--wildlife">
        <?php dynamic_sidebar( 'goal-pillar--wildlife' ); ?>
      </li>
      <li class="goal-pillar goal-pillar--forests">
        <?php dynamic_sidebar( 'goal-pillar--forests' ); ?>
      </li>
      <li class="goal-pillar goal-pillar--oceans">
        <?php dynamic_sidebar( 'goal-pillar--oceans' ); ?>
      </li>
    </ul>
  </div>
</div>
<?php get_footer(); ?>
