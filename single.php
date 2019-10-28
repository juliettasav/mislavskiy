<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Mislavskiy
 */

get_header();
?>
<section class="top_image">
<?php mislavskiy_post_thumbnail(); ?>
</section>

<section class="article-content">
<div class="container">
<div class="row">
	
			<?php
			if ( 'post' === get_post_type() ) :
			?>	
				<div class="col-md-2 col-sm-12">
				<h3 class="anh">
					<?php 
					mislavskiy_posted_on();
					
					?>
				</h3>
				</div>
				<?php endif; ?>
				<div class="col-md-10 col-sm-12 article-txt">

				<?php the_post(); ?>

				<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="http://mislavskiy.com/blog/">Публикации</a></li>
					<li class="breadcrumb-item active" aria-current="page"><?php mislavskiy_posted_by_new() ?></li>
				</ol>
				</nav>
				<h1><?php the_title();?></h1>



		<?php
		the_content( sprintf(
			
			get_the_title()
		) );
  
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mislavskiy' ),
			'after'  => '</div>',
		) );
		?>
	

		</div>

		

	
	</div>


	<div class="row">
				<div class="col-md-2 col-sm-12">
					<div class="social-icons-txt">
						<span>Поделись с друзьями</span><span class="hdds">,</span><br>
						<span class="hdd">им будет интересно</span>
					</div>
				</div>
				<div class="col-md-10 col-sm-12 article-txt-arrow">
					<div class="socialIcons socialDarkIcons">


						<div class="facebook-share" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button"><a class="social" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo current_location(); ?>" class="fb-xfbml-parse-ignore"><i class="fab fa-facebook-f"></i></a></div>
						
						<a class="social" href='https://telegram.me/share/url?url=' onclick='window.open(&apos;https://telegram.me/share/url?url==&apos;+encodeURIComponent(location.href)+&apos;&amp;bodytext=&amp;tags=&amp;text=&apos;+encodeURIComponent(document.title));return false;' rel='nofollow' style='text-decoration:none;' title='Share on Telegram'><i class="fab fa-telegram-plane"></i></a>
					</div>
				</div>
			</div>

	
<script src="https://www.facebook.com/connect.php/js/FB.Share"
 type="text/javascript"></script>

</section>



<?php

get_footer();
