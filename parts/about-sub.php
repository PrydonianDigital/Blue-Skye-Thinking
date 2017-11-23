<div class="row align-center small-up-1 medium-up-3">
	<?php
		$page = get_page_by_title( 'About' );
		$pageStuff = $page->ID;
		$args = array(
			'post_type'			=> 'page',
			'post_parent'		=> $pageStuff,
			'order'				=> 'ASC',
			'orderby'			=> 'menu_order',
			'posts_per_page'	=> -1
		);
		$related_items = new WP_Query( $args );
		if ($related_items->have_posts()) :
		while ( $related_items->have_posts() ) : $related_items->the_post();
		?>
			<div class="column sub top">
				<?php
					if(has_post_thumbnail()) {
				?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php
						the_post_thumbnail( 'sub' );
				?>
				</a>
				<?php
					}
				?>
				<h5><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
			</div>
		<?php
		endwhile;
		endif;
		wp_reset_postdata();
	?>
	<div class="column sub">
		<?php
			$page = get_page_by_title( 'Supporters' );
			$pageStuff = $page->ID;
			$post = get_post($pageStuff);
		?>
		<a href="/supporters/">
			<?php
				echo get_the_post_thumbnail( $pageStuff, 'sub', array( 'class' => 'opacity' ) );
			?>
		</a>
		<h5><a href="/supporters/">Already sponsored? See your cog here and track our mission’s progress!</a></h5>
		<?php wp_reset_postdata(); ?>
	</div>
</div>