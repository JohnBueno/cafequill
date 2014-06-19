<?php get_template_part('templates/page', 'header'); ?>

<div class="col-md-12" style="margin-bottom:20px;">
    <article>
        <h1><?php _e('Sorry, but the page you were trying to view does not exist.', 'roots'); ?></h1>
        <br/>
        <p><?php _e('It looks like this was the result of either:', 'roots'); ?></p>
        <ul>
          <li><?php _e('a mistyped address', 'roots'); ?></li>
          <li><?php _e('an out-of-date link', 'roots'); ?></li>
        </ul>
    </article>

    <?php get_search_form(); ?>
</div>


