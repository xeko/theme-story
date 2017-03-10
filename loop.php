<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('blog'); ?>>
		<div class="row">
			<div class="col-sm-4">
				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail('large', array('class' => 'img-responsive'));?>
					</a>
				<?php endif; ?>
				<!-- /post thumbnail -->
			</div>
			<div class="col-sm-8">
				<!-- post title -->
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h3><?php the_title(); ?></h3></a>
				<!-- /post title -->

				<!-- post details -->
				<?php $count = get_post_meta(get_the_ID(), 'tanaka_post_views_count', true);?>
				<ul id="post-meta" class="list-inline list-unstyled">
					<li><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time("Y年m月d日"); ?></li>
					<li><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $count?></li>
                </ul>
				<!-- /post details -->
		       	<p><?php echo mb_substr( strip_tags( get_the_excerpt()  ), 0, 70 ) . '「...」';?></p>
			</div>
			<div class="line-dot clearfix"></div>
			<?php edit_post_link(); ?>
		</div>
	</article>
	<!-- /article -->

<?php endwhile; 
	if ( function_exists('pagination') )
		pagination();			

	wp_reset_postdata();
?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', THEME_NAME ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
