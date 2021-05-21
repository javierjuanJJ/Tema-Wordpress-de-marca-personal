<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ow_underscores
 */

?>

<footer id="colophon" class="site-footer">
    <a href="#topPage" class="nextButton round">&Hat;</a>
    <p><?php bloginfo( 'name' ); ?> </p>
    <p><?php date_default_timezone_set( 'Europe/Madrid' );

		echo date( 'l jS \of F Y h:i:s A' ); ?></p>
    <!--<div class="site-info">
			<a href="<?php //echo esc_url( __( 'https://wordpress.org/', 'ow_underscores' ) ); ?>">
				<?php
	/* translators: %s: CMS name, i.e. WordPress. */
	//printf( esc_html__( 'Proudly powered by %s', 'ow_underscores' ), 'WordPress' );
	?>
			</a>
			<span class="sep"> | </span>
				<?php
	/* translators: 1: Theme name, 2: Theme author. */
	//printf( esc_html__( 'Theme: %1$s by %2$s.', 'ow_underscores' ), 'ow_underscores', '<a href="http://underscores.me/">Underscores.me</a>' );
	?>
		</div> .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
