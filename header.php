<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php wp_title(''); ?><?php
            if (wp_title('', false)) {
                echo ' :';
            }
            ?> <?php bloginfo('name'); ?></title>

        <link href="//www.google-analytics.com" rel="dns-prefetch">        
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-16x16.png" sizes="16x16" />


        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">

        <?php wp_head(); ?>

    </head>    
    <body <?php body_class(); ?>>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.8&appId=685825391532285";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <div id="back2totop"></div>
        <div class='preloader'>
            <div class="loading"></div>
        </div>
        <div id="wrap-content">
            <nav role="navigation" class="navbar navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a href="tel:0364536365" class="tel hidden-md hidden-lg"><i class="fa fa-phone" aria-hidden="true"></i></a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mmenu">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" width="120" /></a>
                    </div>
                    <!-- Collection of nav links and other content for toggling -->
                    <div id="mmenu" class="collapse navbar-collapse">
                        <?php echo main_nav() ?>
                    </div><!--End #mmenu-->
                </div>
            </nav>
