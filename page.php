<?php get_header(); ?>

	<header class="post-header">
		<div class="post-header-inner">
			<h1 class="hidden-xs hidden-sm"><?php the_title(); ?></h1>
		</div>
		<!-- post thumbnail -->
		<?php if (has_post_thumbnail()) : // Check if Thumbnail exists?>
		<figure style="background-image:url(<?php echo get_the_post_thumbnail_url()?>);">                
            <?php the_post_thumbnail('full', array('class' => 'center-block', 'alt' =>  get_the_title())); ?>
		</figure>
		<?php endif; ?>
        <!-- /post thumbnail -->
	</header><!--End .post-header-->
	<div class="clearfix"></div>
	<!-- section -->
	<section id="wrap-body">				
		<div class="container">
			<div class="row">
					<h1 class="title hidden-md hidden-lg"><?php the_title(); ?></h1>				
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<?php
                	$title_via_img = get_post_meta( get_the_ID(), 'title_via_img', true );
                ?>
                <?php if(!empty($title_via_img)):?>
                    <img src="<?php echo $title_via_img?>" class="center-block img-responsive" alt="<?php the_title()?>" />
                <?php endif;?>
				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class('box-content'); ?>>

					<?php the_content(); ?>

					<div class="clearfix"></div>

					<?php edit_post_link(); ?>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

				</article>
				<!-- /article -->

			<?php endif; ?>
			</div>
		</div><!--End .container-->
	</section><!--End #wrap-body-->
	<!-- /section -->
<?php get_footer(); ?>
