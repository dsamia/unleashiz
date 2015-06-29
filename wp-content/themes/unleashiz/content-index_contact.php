
<?php

$post_image_id = get_post_thumbnail_id($post->ID);
if ($post_image_id) {
        $thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
        if ($thumbnail) (string)$thumbnail = $thumbnail[0];
}
if (!empty($thumbnail)) { ?>
<?php } ?>    
    <!-- <div class="bc-separator">
        <div class="bc-bg bc-bg-4" style="background-image: url('<?php echo $thumbnail; ?>')"></div>
    </div> -->
    <p id="bc-footer"><?php the_title(); ?></p>
    <?php the_content(); ?>


    