<?php
//Modèle index concept
$post_image_id = get_post_thumbnail_id($post->ID);
if ($post_image_id) {
        $thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
        if ($thumbnail) (string)$thumbnail = $thumbnail[0];
} 
?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
                    
