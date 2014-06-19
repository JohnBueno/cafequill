<?php get_template_part('templates/page', 'header'); ?>
<div class="<?php echo roots_main_class(); ?>">
    <?php if (!have_posts()) : ?>
        <div class="alert alert-warning">
            <?php _e('Sorry, no results were found.', 'roots'); ?>
        </div>
        <?php get_search_form(); ?>
    <?php endif; ?>

    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/content', get_post_format()); ?>
    <?php endwhile; ?>

    <?php if ($wp_query->max_num_pages > 1) : ?>
        <nav class="post-nav">
            <?
                echo paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $wp_query->max_num_pages,
                    'prev_text'    => __('<i class="fa fa-arrow-circle-left"></i>'),
                    'next_text'    => __('<i class="fa fa-arrow-circle-right"></i>'),
                ) );
            ?>
        </nav>
    <?php endif; ?>
</div>