<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */
	$lineone = get_field('footer_line_1', 'option');
	$line2 = get_field('line2', 'option');
	$email = get_field('email', 'option');
	$phone_number = get_field('phone_number', 'option');
	$spam = antispambot($email);
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		
			<header class="trip-name">
				<div class="wrapper">
					<h5><?php bloginfo('description'); ?> | <?php echo $phone_number; ?></h5>
					<h4>
						<?php echo $line2 . ' <a href="mailto:'. $spam .'">' . $spam . '</a>';  ?>
					</h4>
				</div><!-- wrapper -->
			</header>
	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
