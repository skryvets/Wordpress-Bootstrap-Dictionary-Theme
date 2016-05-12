<?php
$all_posts = array();
query_posts( 'posts_per_page=500&order=asc' );

if ( have_posts() ) : while ( have_posts() ) : the_post();
	array_push( $all_posts, the_title() );
endwhile;
endif;

print_r($all_posts);
?>