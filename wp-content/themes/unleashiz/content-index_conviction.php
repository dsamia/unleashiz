
<?php
//CONVICTION HOME
$post_image_id = get_post_thumbnail_id($post->ID);
if ($post_image_id) {
        $thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
        if ($thumbnail) (string)$thumbnail = $thumbnail[0];
}
if (!empty($thumbnail)) { ?>    
<section id="bc-7" style="background-image: url('<?php echo $thumbnail; ?>')">
    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
    <span id="anchor-1" class="anchor"><img src="<?php media_url(); ?>ancre-blanc.png" alt=""></span>
</section>
<?php } ?>