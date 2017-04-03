<?php
/**
 * The template for  a category view
 *
 * 
 *
 * Template name: Birch Categories
 *
 * @package birch
 */

get_header(); ?>

	<div id="birchCategories" class="birch_category_list">
		<main id="main" class="site-main" role="main">

			<?php
			/**
			 * Functions hooked in to birch category list action
			 * 
			 */
			do_action( 'birch_category_list' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
