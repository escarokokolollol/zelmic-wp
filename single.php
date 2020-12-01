<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package zelmic
 */

get_header();
?>

  <!-- class "single" because its not page -->
	<main id="primary" class="site-main single">

		<?php
		while ( have_posts() ) :
      the_post();
      
      ?>
      <h1 class="single-title"><?php the_title(); ?></h1>
      <?php
      the_content();
	    zelmic_post_thumbnail();

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'zelmic' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'zelmic' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
