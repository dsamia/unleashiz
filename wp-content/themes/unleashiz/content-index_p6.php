<?php

$post_image_id = get_post_thumbnail_id($post->ID);
if ($post_image_id) {
        $thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
        if ($thumbnail) (string)$thumbnail = $thumbnail[0];
}
if (!empty($thumbnail)) { ?>
    <figure>
        <img src="<?php echo $thumbnail; ?>" alt="">
    </figure>
<?php } ?>