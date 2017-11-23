<?php get_header(); ?>

<div class="pageContainer">

	<div class="row bg" id="pageImage">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div <?php post_class( 'small-12 columns' ); ?>>
				<h3><?php the_date( 'jS F Y' ); ?></h3>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_excerpt(); ?>
			</div>

		<?php endwhile; ?>

		<?php else : ?>

			<div class="small-12 columns">
				<h2>Oh dear...</h2>
				<p>We couldn't find anything...</p>
			</div>

		<?php endif; ?>

	</div>

	<div class="row">
		<div class="small-12 columns align-center">
			<?php if ( function_exists('foundation_pagination') ) { foundation_pagination(); } ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>