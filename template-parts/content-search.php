<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Matt_Ondo
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(
	"bg-white-10 mr4-ns pa4"
); ?>>
	<header class="entry-header relative">
		<?php
  if (is_singular()):
  	the_title('<h1 class="entry-title white">', '</h1>');
  else:
  	the_title(
  		'<h2 class="entry-title mt0"><a href="' .
  			esc_url(get_permalink()) .
  			'" rel="bookmark" class="white no-underline">',
  		'</a></h2>'
  	);
  endif;

  if ('post' === get_post_type()): ?>
			<div class="entry-meta absolute-l top-0 right-0">
				<?php matt_ondo_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php endif;
  ?>
	</header><!-- .entry-header -->

	<?php
//matt_ondo_post_thumbnail();
?>

	<div class="entry-content">
		<?php
  the_content(
  	sprintf(
  		wp_kses(
  			/* translators: %s: Name of current post. Only visible to screen readers */
  			__(
  				'Continue reading<span class="screen-reader-text"> "%s"</span>',
  				'matt-ondo'
  			),
  			array(
  				'span' => array(
  					'class' => array()
  				)
  			)
  		),
  		get_the_title()
  	)
  );

  wp_link_pages(array(
  	'before' => '<div class="page-links">' . esc_html__('Pages:', 'matt-ondo'),
  	'after' => '</div>'
  ));
  ?>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
