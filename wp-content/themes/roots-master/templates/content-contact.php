<div class="col-md-12 contact">
    <article>
    <div class="row">

            <div class="col-md-7 border-right">
                <?php while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
                <?php endwhile; ?>
            </div>
            <aside class="sidebar col-md-3 col-md-offset-1" role="complementary">
                <?php include roots_sidebar_path(); ?>
            </aside><!-- /.sidebar -->
    </div>
    </article>

</div>

