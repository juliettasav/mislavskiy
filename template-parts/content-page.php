<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mislavskiy
 */

?>




<div class="card" id="post-<?php the_ID(); ?>">

	<div class="card-img-top"><?php mislavskiy_post_thumbnail(); ?></div>
	<div class="card-body">
		<?php
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta data-black-txt">
				<?php
				mislavskiy_posted_on();mislavskiy_posted_by();
				
				?>
			</div><!-- .entry-meta -->
		<?php	
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h3 class="card-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		?>
		<?php endif; ?>
	

	

	<div class="entry-content">
		<?php
		the_content( sprintf(
			
			
		) );
  
		// wp_link_pages( array(
		// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mislavskiy' ),
		// 	'after'  => '</div>',
		// ) );
		?>
	</div><!-- .entry-content -->
	
</div>			

</div>

</div>
