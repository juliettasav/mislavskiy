<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mislavskiy
 */

get_header();
?>

	<section id="primary" class="blog-cards">
		<div id="main" class="container">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<div class="row">
			<?php
			/* Start the Loop */
			
			while ( have_posts() ) :
				?>
			<div class="col-md-6 col-lg-4">
			<?php
				the_post();

				
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
		</div>
	</div><!-- #container -->
	</section><!-- #blog-cards -->

<?php

get_footer();
