<?php $the_query = page_content('about'); ?>
<div class="col-sm-12">
    <div class="page-header">
        <h1><?php echo roots_title(); ?></h1>
        <?php if ($the_query->have_posts()) : ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <?php the_field('header_description'); ?>
          <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php if ($the_query->have_posts()) : ?>
  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <div class="col-sm-12">
      <article>
        <?php the_content(); ?>
        <div class="row">
        <?php while (have_posts()) : the_post(); ?>
          <div class="col-sm-2 text-center team-member">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive img-circle')); ?>
                <strong><?php the_title(); ?></strong>
            </a>
          </div>
        <?php endwhile; ?>
        </div>
      </article> 
    </div>  
  <?php endwhile; ?>
<?php endif; ?>
