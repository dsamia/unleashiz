<?php 
//Template Name: P8

$args = array(
    'page_id' => '79',
);
//$GLOBALS['id_page_linked'] = 32;
//$GLOBALS['block_class'] = 'pro';
$GLOBALS['modal_link'] = '';
$query = new WP_Query( $args );

//print_r($query);

if ( $query->have_posts() ) : 
    while ( $query->have_posts() ) : $query->the_post();
        get_template_part( 'content', 'index_p8' );
    endwhile;
endif;

