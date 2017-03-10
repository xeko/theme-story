<?php get_header(); ?>

<section id="wrap-body">				
    <div class="container">
        <div class="row">
            <?php breadcrumb() ?>
            <div class="col-md-8">
                <h1><?php single_cat_title(); ?></h1>

                <?php get_template_part('loop'); ?>

                <?php get_template_part('pagination'); ?>
            </div>
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div><!--End .container-->
</section><!--End #wrap-body-->

<?php get_footer();
