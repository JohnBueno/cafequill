<footer class="content-info" role="contentinfo">
  <div class="container">
    <div class="row">
        <div class="col-sm-2 col-xs-6">
            <h3>CATEGORIES</h3>
            <?php wp_nav_menu(array('menu' => 'Footer Categories' )); ?> 
        </div>
        <div class="col-sm-2 col-xs-6">
            <h3>PAGES</h3>
            <?php wp_nav_menu(array('menu' => 'Footer Pages' )); ?>
        </div>
        <div class="col-md-4 col-xs-12">
            <?php $the_query = page_content('footer'); ?>
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>

            <div class="social">
                <a href="https://www.facebook.com/quill "><i class="fa fa-facebook-square"></i></a>
                <a href="https://twitter.com/quillcom"><i class="fa fa-twitter-square"></i></a>
                <a href="<?php bloginfo('rss_url'); ?>"><i class="fa fa-rss-square"></i></a>
                <a href="https://plus.google.com/+quill/posts"><i class="fa fa-google-plus-square"></i></a>
                <a href="http://www.pinterest.com/quillcom"><i class="fa fa-pinterest-square"></i></a> 
                <a href="https://www.linkedin.com/company/quill"><i class="fa fa-linkedin-square"></i></a>
            </div>
        </div>
        <div class="col-md-4 text-right">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> All Rights Reserved</p>
            <div class="to-top">
                <div id="top"></div>
                <!-- put all of your normal content stuff here -->
                <div id="message">
                    <a href="top">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/to-top.png" alt="" class="img-responsive">
                    </a>
                </div>
            </div>
        </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
