<?php 
//Template Name: Benefices
//Parent Page 
$parent_page = 54;

$args = array(
    'page_id' => $parent_page,
);
$query = new WP_Query( $args );
//print_r($query);
// PARENT CONCEPT
?>
<section id="bc-3">
    <div class="haut">
		<?php
		if ( $query->have_posts() ) : 
		    while ( $query->have_posts() ) : $query->the_post();
		        get_template_part( 'content', 'index_benefices' );

//get thumb
$post_image_id = get_post_thumbnail_id($post->ID);
if ($post_image_id) {
        $thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
        if ($thumbnail) (string)$thumbnail = $thumbnail[0];
}

		    endwhile;
		endif;
		?>

<?php
	//CHILDRENS CONCEPT
	################################################################################################################################
	$args = array(
	    'post_type'      => 'page',
	    'posts_per_page' => -1,
	    'post_parent'    => $parent_page,
	    'order'          => 'ASC',
	    'orderby'        => 'menu_order'
	 );
	$children_pages = new WP_Query( $args );
	if ( $children_pages->have_posts() ) : 
	?>
		<div class="row">
			<?php 
				while ( $children_pages->have_posts() ) : $children_pages->the_post(); 
					get_template_part( 'content', 'index_subbenefices' );
				endwhile; 
				wp_reset_query();
			?>
		</div>
	<?php
	endif;
?>

	</div>
    <span id="anchor-3" class="anchor"><img src="<?php media_url(); ?>ancre-violet.png" alt=""></span>
</section>

<?php
// related to parent image thumb
if (!empty($thumbnail)) : ?>
<div class="bc-separator">
    <div class="bc-bg bc-bg-2" style="background-image: url('<?php echo $thumbnail; ?>')"></div>
</div>
<?php endif; ?>