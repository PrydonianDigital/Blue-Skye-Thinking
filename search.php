<?php get_header(); ?>

<div class="pageContainer">

	<div class="row" id="pageImage">

		<div class="small-12 columns bg">

			<h2>Search results for "<?php the_search_query(); ?>"</h2>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="row">
				<div class="small-12">
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<?php the_excerpt(); ?>
				</div>
			</div>

			<?php endwhile; ?>

			<?php else : ?>

			<div class="row">
				<div class="small-12">
					<h4>Oh dear...</h4>
					<p>We couldn't find anything...</p>
				</div>
			</div>

		<?php endif; ?>

		</div>

		<div class="row">
			<div class="small-12 columns bg align-center">
				<?php if ( function_exists('foundation_pagination') ) { foundation_pagination(); } ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>