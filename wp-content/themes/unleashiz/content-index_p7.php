
<?php

$post_image_id = get_post_thumbnail_id($post->ID);
if ($post_image_id) {
        $thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
        if ($thumbnail) (string)$thumbnail = $thumbnail[0];
}
if (!empty($thumbnail)) { ?>
    <div class="bc-separator">
        <div class="bc-bg bc-bg-3" style="background-image: url('<?php echo $thumbnail; ?>')"></div>
    </div>
    <section id="bc-5">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <span id="anchor-5" class="anchor"><img src="<?php media_url(); ?>ancre-violet.png" alt=""></span>
    </section>
<?php } ?>