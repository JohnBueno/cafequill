<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
        <?php if($post->post_type != 'about'): ?>
            <div class="entry-meta">
                <?php get_template_part('templates/entry-meta'); ?>
            </div>
        <?php endif; ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
    <div class="entry-content">
        <?php 
            if($post->post_type === 'about'){
                include('about-include.php');
            }else{
                the_post_thumbnail('post', array('class' => 'img-responsive'));
            }
        ?>
        
        <?php the_content(); ?>
    </div>
    <footer>
        <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
