<?php
//Modèle index Video
$post_image_id = get_post_thumbnail_id($post->ID);
if ($post_image_id) {
        $thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
        if ($thumbnail) (string)$thumbnail = $thumbnail[0];
} 
?>
<div class="bas">
    <p id="poster" class="open">
	    <?php if (!empty($thumbnail)) : ?>
	    <img src="<?=$thumbnail;?>" alt="">
	    <?php endif; ?>
    <?php the_title(); ?>
	</p>
	<div id="IndexVideoPlayer" class="close">
    	<?php the_content(); ?>
	</div>
</div>
