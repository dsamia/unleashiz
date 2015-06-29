<?php

$post_image_id = get_post_thumbnail_id($post->ID);
if ($post_image_id) {
        $thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
        if ($thumbnail) (string)$thumbnail = $thumbnail[0];
}
if (!empty($thumbnail)) { ?>
    <div class="bc-separator">
        <div class="bc-bg bc-bg-2" style="background-image: url('<?php echo $thumbnail; ?>')"></div>
    </div>
    <section id="bc-4">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <div class="row">
            <?php include 'index-p5-1.php'; ?>
            <?php include 'index-p5-2.php'; ?>
            <?php include 'index-p5-3.php'; ?>
        </div>
        <?php include 'index-p6.php'; ?>
        <span id="anchor-4" class="anchor"><img src="<?php media_url(); ?>ancre-violet.png" alt=""></span>
    </section>
<?php } ?>