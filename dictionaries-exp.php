<?php /* Template Name: Dictionaries Page */ ?>
<?php get_header(); ?>
<?php
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

?>
<?php
$belarussian_alphabet = array( 'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'І', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ў', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Ы', 'Ь', 'Э', 'Ю', 'Я' );
?>
   <div class="container">
	  <div class="row main-container">
		 <?php get_search_form(); ?>
		 <div class="main-content">
			<div class="col-md-9">
			   <?php get_template_part( 'navigation' ) ?>
			   <div class="middle-content">
				  <?php
				  $letters = array();
				  query_posts( 'posts_per_page=500&order=asc' );
				  if ( have_posts() ) : while ( have_posts() ) : the_post();
					 $current_title = the_title( '', '', false );
					 $title_arr     = str_split_unicode( $current_title );
					 for ( $i = 0; $i <= sizeof( $belarussian_alphabet ); $i ++ ) {
						if ( strcmp( $title_arr[0], $belarussian_alphabet[ $i ] ) == 0 ) {
						   echo 'Found matching on ' . $belarussian_alphabet[ $i ] . ' in ' . $current_title;
						   echo "<br>";
						   if ( ! in_array( $belarussian_alphabet[ $i ], $letters ) ) {
							  array_push( $letters, $belarussian_alphabet[ $i ] );
						   }
						}
					 }
				  endwhile;
				  endif;
				  //						print_r( $current_title );
				  //						print_r(mb_strlen($current_title));
				  echo "<br>";
				  $is_active = false;
				  for ( $i = 0; $i <= sizeof( $belarussian_alphabet ); $i ++ ) {
					 for ( $j = 0; $j <= sizeof( $letters ) - 1; $j ++ ) {
						if ( strcmp( $belarussian_alphabet[ $i ], $letters[ $j ] ) == 0 ) {
						   $is_active = true;
						}
					 }
					 if ( $is_active == true ) {
						?><a href="#" class="active" style="color:red;"><?php echo $belarussian_alphabet[ $i ] ?></a><?php
						$i = $i + 1;
					 }
					 ?><a><?php echo $belarussian_alphabet[ $i ] ?></a><?php
					 $is_active = false;
				  }
				  ?>
			   </div>
			</div>
			<?php get_sidebar(); ?>
		 </div><!--.main-content-->
	  </div><!--.main-container-->
   </div>
<?php get_footer(); ?>