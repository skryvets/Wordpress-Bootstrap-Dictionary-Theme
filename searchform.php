<div class="row search">
	<form name="search" action="<?php echo home_url( '/' ) ?>" method="get" class="search-form">
		<div class="col-xs-9 col-xs-offset-1 col-md-4 col-md-offset-3">
			<input type="search" class="form-control" placeholder="Пошук па словах..." value="<?php echo trim( get_search_query() ); ?>" id="s" name="s">
			<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		</div>
		<button type="submit" class="btn btn-primary" onclick="document.forms[0].submit(); return false;">Пошук</button>
	</form>
</div>