<?php get_header(); ?>
	<div class="container">
		<div class="row main-container">
			<?php get_search_form(); ?>
			<div class="main-content">
				<div class="col-md-9">
					<?php get_template_part( 'navigation' ) ?>
					<div class="middle-content">
						<?php if ( have_posts() ) : while( have_posts() ) : the_post();
							the_content();
						endwhile; endif; ?>
					</div>
				</div>
				<?php get_sidebar(); ?>
			</div><!--.main-content-->
		</div><!--.main-container-->
	</div>
<?php get_footer(); ?>