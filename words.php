<?php /* Template Name: Words Page */ ?>

<?php get_header(); ?>
	<div class="container">
		<div class="row main-container">
			<?php get_search_form(); ?>
			<div class="main-content">
				<div class="col-md-9">
					<?php get_template_part( 'navigation' ) ?>
					<div class="middle-content">
						<?php
						query_posts( 'posts_per_page=500&order=asc' );
						?>
						<?php if ( have_posts() ) : ?><?php while ( have_posts() ) : the_post(); ?>
							<p><a href="#<?php the_ID(); ?>" data-toggle="collapse"><?php the_title(); ?></a></p>
							<div id="<?php the_ID(); ?>" class="collapse"><?php the_content(); ?></div>
						<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
				<?php get_sidebar(); ?>
			</div><!--.main-content-->
		</div><!--.main-container-->
	</div>
<?php get_footer(); ?>