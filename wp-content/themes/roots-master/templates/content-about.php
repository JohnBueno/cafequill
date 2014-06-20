<article <?php post_class(); ?>>
    <header>
        <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
    </header>
    <div class="entry-summary">
        <div class="about-block">
            <?php include('about-include.php'); ?>  
        </div>
        <?php the_excerpt(); ?>
        <?php if($post->post_type === 'about'): ?>
            <h3>
                Social: 
                <?php if(get_field('facebook')): ?>
                    <a href="http://<?php the_field('facebook'); ?>"><i class="fa fa-facebook-square"></i></a>
                <?php endif; ?>

                <?php if(get_field('twitter')): ?>
                    <a href="http://<?php the_field('twitter'); ?>"><i class="fa fa-twitter-square"></i></a>
                <?php endif; ?>

                <?php if(get_field('rss')): ?>
                    <a href="http://<?php the_field('rss'); ?>"><i class="fa fa-rss-square"></i></a>
                <?php endif; ?>

                <?php if(get_field('google')): ?>
                    <a href="http://<?php the_field('google'); ?>"><i class="fa fa-google-plus-square"></i></a>
                <?php endif; ?>

                <?php if(get_field('pinterest')): ?>
                    <a href="http://<?php the_field('pinterest'); ?>"><i class="fa fa-pinterest-square"></i></a>
                <?php endif; ?>

            </h3>
        <?php endif; ?>
    </div>
</article>