<?php 
//Template Name: Teaser

$args = array(
    'page_id' => '4',
);
$query = new WP_Query( $args );

//print_r($query);

if ( $query->have_posts() ) : 
    while ( $query->have_posts() ) : $query->the_post();
        get_template_part( 'content', 'index_teaser' );
    endwhile;
endif;

