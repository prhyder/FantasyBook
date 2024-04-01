<?php
/**
 * The template for displaying the Author page.
 * 
 * Template Name: Author Page
 *
 * @package _s
 */

get_header();
?>

<main id="primary" class="site-main">

	

		<?php
			$args = the_title();
			get_template_part('template-parts/header', 'interior',
				array(
					'title' => $args,
				)
			);
		?>



	<section>
	<div class="container">
			<div class="row">
			<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
			</div>
		</div>
	</section>
		

	</main><!-- #main -->

<?php
get_footer();
