<div class="col-md-8 page">
    <article <?php post_class(); ?>>
    <?php while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
      <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
    <?php endwhile; ?>
    </article>
</div>