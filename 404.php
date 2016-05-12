<?php get_header(); ?>
	<div class="container">
		<div class="row main-container">
			<?php get_search_form(); ?>
			<div class="main-content">
				<div class="col-md-9">
					<?php get_template_part( 'navigation' ) ?>
					<div class="middle-content">
						<h1>Прабачце, пошук не даў вынікаў...</h1>
					</div>
				</div>
			</div><!--.main-content-->
		</div><!--.main-container-->
	</div>
<?php get_footer(); ?>