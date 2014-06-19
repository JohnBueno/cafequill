<header class="banner" role="banner">
    <div class="row top-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-md-6 hidden-sm hidden-xs">
                    <?php wp_nav_menu(array('menu' => 'Header Pages' )); ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5 col-xs-12 pull-right search">
                    <div class="col-sm-7 col-xs-5 hidden-xs">
                        <?php get_search_form(); ?>
                    </div>
                    <small>Brought to you by</small>&nbsp;
                     <a href="http://quill.com">
                     <img class="logo-sm" src="<? bloginfo('template_url'); ?>/assets/img/logo-quill-sm.png"/>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="chalkboard col-sm-12">
            
            <div class="row">
                <div class="col-lg-12 inner">
                    <a class="brand" href="<?php echo home_url('/') ?>">
                        <img class="logo-lg" src="<? bloginfo('template_url'); ?>/assets/img/logo-quill-lg.png"/>
                    </a>
                    <h1>Serving fresh perspectives and fueling your day.</h1>
                    <nav class="nav-main" role="navigation">
                        <?php
                            if (has_nav_menu('primary_navigation')) :
                                wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
                            endif;
                        ?>
                    </nav>
                    <div class="mobile-nav">
                        <span id="toggle-menu" class="serif"><i class="fa fa-align-justify"></i> Menu</span>
                        <br/>
                        <div id="dropdown" class="dropdown">
                            <div class="serif">Categories</div>
                            <?php wp_nav_menu(array('menu' => 'Mobile Categories' )); ?>
                            <div class="serif">Pages</div>
                            <?php wp_nav_menu(array('menu' => 'Header Pages' )); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
