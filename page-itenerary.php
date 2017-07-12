<?php
/**
 * Template Name: Itenerary
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="page">
				<div class="wrapper">
					
						<h1><?php the_title(); ?></h1>
					
				</div>
				
			</header>

			<?php if( have_rows('day') ) : while( have_rows('day') ) : the_row(); ?>
				<header class="trip-name">
					<h2><?php the_sub_field('title'); ?></h2>
				</header>
				<?php if( have_rows('activity') ) : ?>
					<section class="boxes">
					<?php while( have_rows('activity') ) : the_row(); ?>
						<div class="box">
							<?php the_sub_field('description'); ?>
						</div>
					<?php endwhile; ?>
					</section>
				<?php endif; ?>
			<?php endwhile; endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
