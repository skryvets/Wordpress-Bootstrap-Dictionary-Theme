<?php get_header(); ?>
	<div class="container">
		<div class="row main-container">
			<?php get_search_form(); ?>
			<div class="main-content">
				<div class="col-md-9">
					<?php get_template_part( 'navigation' ) ?>
					<div class="middle-content">
						<?php get_template_part('buttons') ?>
						<p><?php printf(__('Вынiкi пошуку: %s', 'default'), get_search_query()); ?></p>
						<?php if (have_posts() && strlen( trim(get_search_query()) ) != 0 ): while (have_posts()): the_post(); ?>
							<p><?php the_title(); ?></p>
							<p><?php the_content(); ?></p>
						<?php endwhile;
						else: ?>
							<p><?php echo 'Прабачце, пошук не даў вынікаў' ?></p>
						<?php endif; ?>
					</div>
				</div>
				<?php get_sidebar(); ?>
			</div><!--.main-content-->
		</div><!--.main-container-->
	</div>
<?php get_footer(); ?>