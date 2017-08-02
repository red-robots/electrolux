<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); 

// specific post ID you want to pull
$post = get_post(2); 
setup_postdata( $post );

	$image = get_field('background_image');
	$title = get_field('title');
	$background_image = get_field('background_image');
	$title_2 = get_field('title_2');
	$title_2_dates = get_field('title_2_dates');
	$title_3 = get_field('title_3');
	$content = get_field('content');
	$photos = get_field('photos');
	$images = get_field('photos');

	

wp_reset_postdata();

?>
<?php if( !empty($image) ): ?>
			
			<div class="home-banner">
				<!-- <h2><?php echo $title; ?></h2> -->
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<div class="dates">
					<h3><?php echo $title_2; ?></h3>
					<h4><?php echo $title_2_dates; ?></h4>
				</div>
			</div>
	
		<?php endif; ?>
	<div id="primary" class="content-area">

		<header class="trip-name">
			<div class="chevron">
				<i class="fa fa-chevron-circle-down fa-4x" aria-hidden="true"></i>
			</div>
			<h2><?php echo $title_3; ?></h2>
		</header>

		<section class="description">
			<div class="entry-content">
				<?php echo $content; ?>
			</div>
		</section>

		<section class="gallery">
			<?php 

			if( $images ): ?>
			        <?php foreach( $images as $image ): ?>
			            <div class="photo-box">
			            	<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
			            </div>
			               
			        <?php endforeach; ?>
			<?php endif; ?>
		</section>		
		

	</div><!-- #primary -->

<?php
get_footer();
