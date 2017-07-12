<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="page">
				<div class="entry-content">
					<h1><?php the_title(); ?></h1>
					
				</div>
			</header>

			<section class="description">
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			</section>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
