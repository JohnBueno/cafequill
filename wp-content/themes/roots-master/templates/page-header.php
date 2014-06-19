<div class="col-sm-12">
    <div class="page-header">

        <h1><?php echo roots_title(); ?></h1>
        
        <?php 
            if(category_description()){
                echo "<p>".category_description()."</p>";
            }elseif (is_archive()) {
                $post_type = get_post_type_object(get_post_type($post));
                echo "<p>".$post_type->description."</p>";
            }elseif (is_page()) {
                $header_description = get_field('header_description');
                echo($header_description);
            }
        ?>
        <?php if(is_home()): ?>
            <?php $the_query = page_content('home'); ?>
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <?php the_field('header_description'); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>