<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mislavskiy
 */

?>

<section class="no-results not-found">
	<div class="container">
	<header>
		<div class="row">
			<div class="col-sm-12"><h1 class="page-title"><?php esc_html_e( 'Ничего не найдено по данному запросу!', 'mislavskiy' ); ?></h1></div>
		</div>
		
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'mislavskiy' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Извините, но нам не удалось найти ваш запрос. Попробуйте другое ключевое слово для поиска!', 'mislavskiy' ); ?></p>
			<?php
			get_sidebar();

		else :
			?>

			<p><?php esc_html_e( 'Наверное, это не та страница, которую вы ищете. Пожалуйста, воспользуйтесь поиском.', 'mislavskiy' ); ?></p>
			
			<?php
			get_sidebar();

		endif;
		?>
	</div><!-- .page-content -->
	</div><!-- .container -->
</section><!-- .no-results -->
