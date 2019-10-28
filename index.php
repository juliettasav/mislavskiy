<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mislavskiy
 */

get_header();
?>

<section class="blog-cards">
		<div class="container">
		
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
                ?>

				<div class="row">
				<div class="col-sm-12">
					<h1><?php single_post_title(); ?></h1>
				</div>
            </div>
            <div class="row  blog-selector">
            <div class="col-md-5 blog-page-col">
			<?php	$bloggood_ru_pages = wp_count_posts();     
					$bloggood_ru_pages = $bloggood_ru_pages->publish;
					$current_pages = ceil($bloggood_ru_pages / 9);
			?>
			<?php 

			$pages = array(
				'show_all'     => false, // показаны все страницы участвующие в пагинации
				'end_size'     => 0,     // количество страниц на концах
				'mid_size'     => 0,     // количество страниц вокруг текущей
				'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
				'prev_text'    => __('<'),
				'next_text'    => __('>'),
				'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
				'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
				'screen_reader_text' => __( 'Posts navigation' ),
			);
			
			
			
			

			
			
			
			?>
			<span>
			Страница
					<?php the_posts_pagination( $pages ); ?>
			из <?php echo "$current_pages"; ?>
            </div>
		</span>
            <div class="col-md-7 blog-search-col">
            <a class="link-dotted" href="#" data-toggle="modal" data-target="#tags">Выбрать по тегу</a>
            <?php get_sidebar(); ?> 
            </div>
            
            </div>
			<div class="row">	
			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				?>
				<div class="col-md-6 col-lg-4">
				<?php the_post(); ?>
				
				
				<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
				
				<?php
			endwhile;

			?>
			</div>
			<?php

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
			
		
			<div class="row  blog-selector_bottom">
				<div class="col-sm-12 blog-page-col">
				<?php	$bloggood_ru_pages = wp_count_posts();     
					$bloggood_ru_pages = $bloggood_ru_pages->publish;
					$current_pages = ceil($bloggood_ru_pages / 9);
			?>
			<?php 

			$pages = array(
				'show_all'     => false, // показаны все страницы участвующие в пагинации
				'end_size'     => 0,     // количество страниц на концах
				'mid_size'     => 0,     // количество страниц вокруг текущей
				'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
				'prev_text'    => __('<'),
				'next_text'    => __('>'),
				'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
				'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
				'screen_reader_text' => __( 'Posts navigation' ),
			);
			
			
			
			

			
			
			
			?>
			<span>
			Страница
					<?php the_posts_pagination( $pages ); ?>
			из <?php echo "$current_pages"; ?>
				</div>
</div>		
    </div>
			
	



</div>


	
	</section>

	<div class="modal fade modal-dark-mode" id="tags" tabindex="-1" role="dialog" aria-labelledby="tagsTitle"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-date" id="tagsTitle">Статьи по тегам</h1>
					<a class="modal-btn-close" data-dismiss="modal" aria-label="Close"></a>
				</div>
				<div class="modal-body">
				<?php 
				$all_categories = get_categories('hide_empty=0');
				$category_link_array = array();
				foreach( $all_categories as $single_cat ){
					$category_link_array[] = '<a href="' . get_category_link($single_cat->term_id) . '">' . $single_cat->name . '</a>';
				}
				echo implode(', ', $category_link_array);
				
				?>
					
				</div>
			</div>
		</div>
	</div>



<?php

get_footer();
