<?php include "alphabet.php"; ?>
<div class="col-md-3">
   <div class="sidebar-title">Расказаць у сацыяльных сетках:</div>
   <div class="social-icons">
	  <a href="http://vk.com/share.php?url=http://slounik.tk" target="_blank"><img src="images/social/vk.png"></a>
	  <a href="https://www.facebook.com/sharer/sharer.php?u=slounik.tk" target="_blank"><img src="images/social/fb.png"></a>
   </div>
   <div class="sidebar-title">Пошук па літарах:</div>
   <div class="alphabet">
	  <?php
	  $home_url = get_home_url();
	  $is_active = false;
	  for ( $i = 0; $i <= sizeof( $alphabet ); $i ++ ) {
		 for ( $j = 0; $j <= sizeof( $letters ) - 1; $j ++ ) {
			if ( strcmp( $alphabet[ $i ], $letters[ $j ] ) == 0 ) {
			   $is_active = true;
			}
		 }
		 if ( $is_active == true ) {
			?>
			<a href="<?php echo $home_url . "/?s=" . $alphabet[ $i ] ; ?>" class="active"><?php echo $alphabet[ $i ] ?></a><?php
		 } else {
			?>
			<a><?php echo $alphabet[ $i ] ?></a><?php
		 }
		 $is_active = false;
	  }
	  ?>
   </div>
</div>