<div class="col-md-8 page thank-you">
    <article <?php post_class(); ?>>
    <?php while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
      <a href="#" id="go-back" class="btn btn-primary">Click Here to Go Back</a>
    <?php endwhile; ?>
    </article>
</div>