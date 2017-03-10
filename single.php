<?php get_header(); ?>

	<!-- section -->
	<section id="wrap-body">
		<div class="container">
	        <div class="row">
	            <?php breadcrumb() ?>
		            <div class="col-md-8">
		                <?php if (have_posts()): while (have_posts()) : the_post(); ?>

		                        <!-- article -->
		                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		                        	
		                            <!-- post thumbnail -->
		                            <?php if (has_post_thumbnail()) : // Check if Thumbnail exists ?>
		                                    <?php the_post_thumbnail('full', array('class' => 'center-block', 'title' =>  get_the_title())); ?>
		                            <?php endif; ?>
		                            <!-- /post thumbnail -->
		                            
		                            <!-- post title -->
		                            <h1 class="entry-title"><?php the_title(); ?></h1>		                            
		                            <!-- /post title -->
		                            <div class="below-entry-meta">
		                                <!-- post details -->
		                                <?php
		                                	$count = get_post_meta(get_the_ID(), 'tanaka_post_views_count', true);
		                                ?>
		                                <span class="date"><i class="fa fa-bookmark-o" aria-hidden="true"></i> <?php the_time('F j, Y'); ?></span>
		                                <span class="tag-links"><?php echo tags_by_post(get_the_ID()) ?></span>
		                                <span class="cat-links"><i class="fa fa-folder-open-o" aria-hidden="true"></i> <?php echo get_the_category_list(', ') ?></span>
		                                <span class="pull-right"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $count?> views</span>
		                            </div><!--End .below-entry-meta-->
		                            <div id="post-content">
		                            <?php the_content(); // Dynamic Content ?>                            
		                            </div><!--End #post-content-->
		                                
		                            <?php edit_post_link(); // Always handy to have Edit Post Links available ?>

		                            <?php related_post() ?>
		                            <div class="clearfix"></div>
		                        </article>
		                        <!-- /article -->

		                    <?php endwhile; ?>

		                <?php else: ?>

		                    <!-- article -->
		                    <article>

		                        <h1><?php _e('Sorry, nothing to display.', 'shiba2'); ?></h1>

		                    </article>
		                    <!-- /article -->

		                <?php endif; ?>        
		            </div>
		            <div class="col-md-4">
		                <?php get_sidebar(); ?>

		            </div>
	        </div>
        </div>
	</section>
	<!-- /section -->
<?php get_footer(); ?>
