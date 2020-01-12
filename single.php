<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Matt_Ondo
 */

get_header(); ?>

	<div class="w-100 mw9 center flex flex-column flex-row-ns ph4">
		<div id="primary" class="content-area w-100 w-70-ns w-80-l">
			<main id="main" class="site-main">

			<?php while (have_posts()):
   	the_post();

   	get_template_part('template-parts/content', get_post_type());
   endwhile;
// End of the loop.
?>

			</main><!-- #main -->
		</div><!-- #primary -->

	<div class="w-100 w-30-ns w-20-l">
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer();
