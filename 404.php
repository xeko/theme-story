<?php get_header(); ?>

<section id="wrap-body">				
    <div class="container">
        <div class="row">
            <?php breadcrumb() ?>
            <div class="col-md-8">
                <article id="post-404">

                    <h1><?php _e('Page not found', THEME_NAME); ?></h1>
                    <h2>
                        <a href="<?php echo home_url(); ?>"><?php _e('Return home?', THEME_NAME); ?></a>
                    </h2>

                </article>
                <!-- /article -->
            </div>
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div><!--End .container-->
</section><!--End #wrap-body-->

<?php get_footer(); ?>
