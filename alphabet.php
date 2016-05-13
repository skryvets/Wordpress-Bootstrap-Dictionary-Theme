<?php
//String split into array of chars. Unicode support.
function str_split_unicode( $str, $l = 0 ) {
   if ( $l > 0 ) {
	  $ret = array();
	  $len = mb_strlen( $str, "UTF-8" );
	  for ( $i = 0; $i < $len; $i += $l ) {
		 $ret[] = mb_substr( $str, $i, $l, "UTF-8" );
	  }

	  return $ret;
   }

   return preg_split( "//u", $str, - 1, PREG_SPLIT_NO_EMPTY );
}

$alphabet = array( 'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'І', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ў', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Ы', 'Ь', 'Э', 'Ю', 'Я' );
//First letters from the titles
$letters = array();
query_posts( 'posts_per_page=500&order=asc' );

//Finding first letters from alphabet

if ( have_posts() ) : while ( have_posts() ) : the_post();
   $current_title = the_title( '', '', false );
   $title_arr     = str_split_unicode( $current_title );
   for ( $i = 0; $i <= sizeof( $alphabet ); $i ++ ) {
	  if ( strcmp( $title_arr[0], $alphabet[ $i ] ) == 0 ) {
		 if ( ! in_array( $alphabet[ $i ], $letters ) ) {
			array_push( $letters, $alphabet[ $i ] );
		 }
	  }
   }
endwhile;
endif;

//echo "<br>";
//$is_active = false;
//for ( $i = 0; $i <= sizeof( $alphabet ); $i ++ ) {
//   for ( $j = 0; $j <= sizeof( $letters ) - 1; $j ++ ) {
//	  if ( strcmp( $alphabet[ $i ], $letters[ $j ] ) == 0 ) {
//		 $is_active = true;
//	  }
//   }
//   if ( $is_active == true ) {
//	  ?><!--<a href="#" class="active" style="color:red;">--><?php //echo $alphabet[ $i ] ?><!--</a>--><?php
//	  $i = $i + 1;
//   }
//   ?><!--<a>--><?php //echo $alphabet[ $i ] ?><!--</a>--><?php
//   $is_active = false;
//}
?>