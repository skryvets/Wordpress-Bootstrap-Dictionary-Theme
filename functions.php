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

?>