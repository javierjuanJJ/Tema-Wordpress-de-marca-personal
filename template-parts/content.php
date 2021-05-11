<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ow_underscores
 */

?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
if ( is_home() ) :
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php else : ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class2(); ?>> <?php endif; ?>


        <div class="card">

            <div class="card-header">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="titleSection">', '</h1>' );
				else :
					the_title( '<h2 class="titleSection"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) :
					?>
                    <div class="entry-meta">
						<?php
						ow_underscores_posted_on();
						ow_underscores_posted_by();
						ow_underscores_post_thumbnail();
						?>
                    </div><!-- .entry-meta -->
				<?php endif; ?>


                <div class="entry-content">
					<?php
					the_content(
						sprintf(
							wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ow_underscores' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post( get_the_title() )
						)
					);

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ow_underscores' ),
							'after'  => '</div>',
						)
					);
					ow_underscores_entry_footer();
					?>
                </div><!-- .entry-content -->


            </div>

        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>



