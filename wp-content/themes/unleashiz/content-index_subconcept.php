<?php
//Modèle index sub concept
$post_image_id = get_post_thumbnail_id($post->ID);
if ($post_image_id) {
        $thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
        if ($thumbnail) (string)$thumbnail = $thumbnail[0];
} 
?>
    <div class="col-xs-12 col-sm-4 col-md-4">
        <h3><?php the_title(); ?></h3>
        <?php 
        if (!empty($thumbnail)) :
        ?>
        	<img src="<?=$thumbnail;?>" alt="">
        <?php
        endif;
        ?>
        <?php the_content(); ?>
    </div>