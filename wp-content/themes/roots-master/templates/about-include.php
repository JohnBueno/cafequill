<div class="col-sm-12 col-md-6">
    <?php the_post_thumbnail('about', array('class' => 'img-responsive')); ?>
</div>
<div class="col-sm-12 col-md-6 ">
    <?php the_content(); ?>
    <h3>
        Social: 
        <? if(get_field('facebook')): ?>
            <a href="http://<? the_field('facebook'); ?>"><i class="fa fa-facebook-square"></i></a>
        <? endif; ?>

        <? if(get_field('twitter')): ?>
            <a href="http://<? the_field('twitter'); ?>"><i class="fa fa-twitter-square"></i></a>
        <? endif; ?>

        <? if(get_field('rss')): ?>
            <a href="http://<? the_field('rss'); ?>"><i class="fa fa-rss-square"></i></a>
        <? endif; ?>

        <? if(get_field('google')): ?>
            <a href="http://<? the_field('google'); ?>"><i class="fa fa-google-plus-square"></i></a>
        <? endif; ?>

        <? if(get_field('pinterest')): ?>
            <a href="http://<? the_field('pinterest'); ?>"><i class="fa fa-pinterest-square"></i></a>
        <? endif; ?>
        <? if(get_field('linkedin')): ?>
            <a href="http://<? the_field('linkedin'); ?>"><i class="fa fa-linkedin-square"></i></a>
        <? endif; ?>

    </h3>
</div>
