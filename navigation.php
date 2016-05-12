<nav>
	<a class="mobile-menu-switcher" href="javascript:void(0);" onclick="mobileMenuAction()">☰</a>
	<ul class="nav nav-pills nav-justified">
		<li><a href="<?php echo get_home_url(); ?>" class="btn btn-primary">Галоўная</a></li>
		<li><a href="<?php echo get_permalink(get_page_by_title('Words Page')) ?>" class="btn btn-primary">Усе словы</a></li>
		<li><a href="<?php echo get_permalink(get_page_by_title('Dictionaries')) ?>" class="btn btn-primary">Іншыя слоўнікі</a></li>
	</ul>
</nav>