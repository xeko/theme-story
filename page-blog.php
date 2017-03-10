<?php /* Template Name: Page Blog*/ ?>
<?php get_header(); ?>

	<header class="post-header">
		<div class="post-header-inner">
			<h1 class="hidden-xs hidden-sm"><?php the_title(); ?></h1>
		</div>
		<!-- post thumbnail -->
		<?php $pageID = get_the_ID()?>
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
			<div class="box-content">
            <?php
            $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
            $args = array( 
			    'post_type'         => 'post',
			    'orderby'           => 'date',
			    'order'             => 'DESC',
			    'post_status'       => 'publish',
			    'posts_per_page'    => 12,
			    'paged'             => $paged,
			);

            $temp = $wp_query; $wp_query = null;
            $wp_query = new WP_Query($args);
            
            if($wp_query->have_posts()):
            	while ($wp_query->have_posts()): $wp_query->the_post();
                $cat_arr = get_the_category(get_the_ID());
                
                $count = get_post_meta(get_the_ID(), 'tanaka_post_views_count', true);
                $count = empty($count) ? 0 : $count;
                ?>
                <div class="col-xs-6 col-sm-4 col-md-3 items">
                    <div class="post-image">
                        <figure>	
                            <?php if (has_post_thumbnail()) : ?>                                    
                                <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>                                    
                            <?php endif; ?>
                        </figure>
                        <p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">詳しく見る</a></p>
                    </div>
                    <div class="item-position"><?php echo $count ?> <i class="fa fa-eye" aria-hidden="true"></i></div>
                    <a href="<?php the_permalink(); ?>" class="item-desc"><?php echo cut_title(get_the_title()) ?></a>
                </div>
                <?php
            	endwhile;
				if ( function_exists('pagination') )
					pagination();			

            wp_reset_postdata();
            endif; ?>
			<div class="clearfix"></div>

			<?php edit_post_link('編集', '<p>', '</p>', $pageID); ?>
				</div><!--End .box-content-->
            </div>
		</div><!--End .container-->
	</section><!--End #wrap-body-->
	<!-- /section -->
<?php get_footer(); ?>
