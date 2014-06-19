<article <?php post_class(); ?>>
    <header>
        <div class="entry-meta">
            <?php get_template_part('templates/entry-meta'); ?>
        </div>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <div class="entry-summary">
        <?php the_post_thumbnail('post', array('class' => 'img-responsive')); ?> 
        <?php the_excerpt(); ?>
        <a class="btn btn-primary read-more" href="<? the_permalink(); ?>">Read More</a>
    </div>
</article>
