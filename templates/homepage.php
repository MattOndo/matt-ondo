<?php
/* Template Name: Homepage */

get_header();

$fields = get_fields();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <section class="w-100 min-vh-100 pa4 flex flex-column justify-center items-center">
        <header class="mw9">
          <h1 class="fw9 f1"><?php echo $fields['headline']; ?></h1>
          <p><?php echo $fields['subheadline']; ?></p>
        </header>
        <article class="mw7 tc fw1">
          <?php the_content(); ?>
        </article>
      </section>

      <section>

      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
