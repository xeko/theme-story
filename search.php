<?php get_header(); ?>

	<section id="wrap-body">				
		<div class="container">
			<div class="row">

			<h1><?php echo sprintf( __( '「%s」の検索結果%s件 ', THEME_NAME ), get_search_query(), $wp_query->found_posts );?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</div>
		</div><!--End .container-->
	</section><!--End #wrap-body-->

<?php get_footer();
