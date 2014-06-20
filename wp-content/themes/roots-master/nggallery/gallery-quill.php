
<?php 
/**
Template Page for the gallery overview

Follow variables are useable :

    $gallery     : Contain all about the gallery
    $images      : Contain all images, path, title
    $pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
**/
?>
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) : ?>

<div class="galleryoverview row" id="<?php echo $gallery->anchor ?>">
	<div class="col-md-12">
        <h2><?php echo($gallery->title); ?></h2>    
    </div>
	<!-- Thumbnails -->
	<?php foreach ( $images as $image ) : ?>
	
	<div id="image-<?php echo $image->pid ?>" class="thumbnail-box col-md-3" <?php echo $image->style ?> >
        <div class="gallery-thumbnail text-center" >
			<a href="<?php echo $image->imageURL ?>" title="<?php echo $image->description ?>" <?php echo $image->thumbcode ?> >
				<?php if ( !$image->hidden ) { ?>
				    <img class="img-responsive" title="<?php echo $image->alttext ?>" alt="<?php echo $image->alttext ?>" src="<?php echo $image->thumbnailURL ?>" <?php echo $image->size ?> />
				<?php } ?>
                <?php echo($image->description); ?>
			</a>
		</div>
	</div>

 	<?php endforeach; ?>
 	
	<!-- Pagination -->
 	<?php echo $pagination ?>
 	
</div>

<?php endif; ?>