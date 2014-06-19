<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="row">
        <div class="col-sm-12">
           <h2><?php the_title(); ?></h2> 
        </div>
        
    </div>
    <div class="row">
        <?php include('about-include.php'); ?>
    </div>
  </article>
<?php endwhile; ?>
