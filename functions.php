<?php

function SearchFilter($query) {
	// If 's' request variable is set but empty
	if (isset($_GET['s']) && empty($_GET['s']) && $query->is_main_query()){
		$query->is_search = true;
		$query->is_home = false;
	}
	return $query;
}
add_filter('pre_get_posts','SearchFilter');

function wpse_11826_search_by_title( $search, $wp_query ) {
   if ( ! empty( $search ) && ! empty( $wp_query->query_vars['search_terms'] ) ) {
	  global $wpdb;

	  $q = $wp_query->query_vars;
	  $n = ! empty( $q['exact'] ) ? '' : '%';

	  $search = array();

	  foreach ( ( array ) $q['search_terms'] as $term )
		 $search[] = $wpdb->prepare( "$wpdb->posts.post_title LIKE %s", $n . $wpdb->esc_like( $term ) . $n );

	  if ( ! is_user_logged_in() )
		 $search[] = "$wpdb->posts.post_password = ''";

	  $search = ' AND ' . implode( ' AND ', $search );
   }

   return $search;
}

add_filter( 'posts_search', 'wpse_11826_search_by_title', 10, 2 );

?>