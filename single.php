<?php get_header(); ?>
<div class="pageContainer">
	<?php
		$items = get_post_meta( $post->ID, '_icons_items', true );
		foreach( $items as $key => $value) {
			if($value == 'ufo'){
	?>
	<div class="ufo" data-paroller-factor="-2" data-paroller-type="foreground" data-paroller-direction="horizontal">
		<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/ufo_1.png" alt="ufo_1" width="216" height="28" class="ufo_1" />
		<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/ufo.png" alt="ufo" width="216" height="108" />
	</div>
	<?php
		}
		if($value == 'spaceman'){
	?>
	<div class="spaceman" data-paroller-factor="-2" data-paroller-type="foreground" data-paroller-direction="vertical">
		<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/spaceman_arm.png" alt="spaceman_arm" width="200" height="295" class="spacemanarm" />
		<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/spaceman_moon.png" alt="spaceman" width="200" height="295" class="spacemanbase" />
	</div>
	<?php
		}
		if($value == 'sputnik'){
	?>
	<div class="sputnik" data-paroller-factor="2" data-paroller-type="foreground" data-paroller-direction="horizontal">
		<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/sputnik_1.png" alt="sputnik_1" width="28" height="113" class="sputnik_1" />
		<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/sputnik.png" alt="sputnik" width="150" height="113">
	</div>
	<?php
		}
		if($value == 'alien'){
	?>
	<div class="alien" data-paroller-factor="2" data-paroller-type="foreground" data-paroller-direction="horizontal">
		<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/alien_leftarm.png" alt="alien_leftarm" width="177" height="150" class="leftArm" />
		<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/alien_rightarm.png" alt="alien_rightarm" width="177" height="150" class="rightArm" />
		<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/alien_base.png" alt="alien" width="120" height="102" class="alienBase" />
	</div>
	<?php
		}
		if($value == 'meteor'){
	?>
	<div class="meteor" data-paroller-factor="-2" data-paroller-type="foreground" data-paroller-direction="horizontal">
		<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/meteor_flames.png" alt="meteor_flames" width="100" height="74" class="meteor_flames" />
		<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/meteor.png" alt="meteor" width="100" height="74" />
	</div>
	<?php
		}
		if($value == 'rocket'){
	?>
	<div class="rocket" data-paroller-factor="1" data-paroller-type="foreground" data-paroller-direction="vertical">
		<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/rocket.png" alt="rocket" width="175" height="263">
		<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/rocket_jet.png" alt="rocket_jet" width="175" height="130" class="rocket_jet" />
	</div>
	<?php
		}
		if($value == 'jupiter'){
	?>
	<div class="jupiter" data-paroller-factor="2" data-paroller-type="foreground" data-paroller-direction="horizontal">
		<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/j_moon1.png" alt="j_moon1" width="26" height="126" class="j_moon1" />
		<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/j_moon2.png" alt="j_moon2" width="31" height="126" class="j_moon2" />
		<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/j_moon3.png" alt="j_moon3" width="23" height="126" class="j_moon3" />
		<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/jupiter.png" alt="jupiter" width="227" height="126" class="jupiterPlanet" />
	</div>
	<?php
		}
		if($value == 'satellite'){
	?>
	<div class="satellite" data-paroller-factor="-2" data-paroller-type="foreground" data-paroller-direction="horizontal">
		<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/satellite_dish.png" alt="satellite dish" width="150" height="151" class="satellite_dish" />
		<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/satellite.png" alt="satellite" width="150" height="151" />
	</div>
	<?php
		}
		if($value == 'shuttle'){
	?>
	<div class="shuttle" data-paroller-factor="2" data-paroller-type="foreground" data-paroller-direction="vertical">
		<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/shuttle.png" alt="shuttle" width="203" height="363">
		<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/shuttle_jets.png" alt="shuttle_jets" width="203" height="77" class="shuttle_jets" />
	</div>
	<?php
		}
		if($value == 'rover'){
	?>
	<div class="rover" data-paroller-factor="-2" data-paroller-type="foreground" data-paroller-direction="horizontal">
		<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/rover_arm.png" alt="roverarm" width="250" height="192" class="rover_arm" />
		<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/rover.png" alt="rover" width="250" height="192" />
	</div>
	<?php
		}
	?>
	<?php
		}
	?>
	<div class="row" id="blogPost">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<script type="application/ld+json">
	{
	  "@context": "http://schema.org",
	  "@type": "NewsArticle",
	  "mainEntityOfPage": {
	    "@type": "WebPage",
	    "@id": "https://google.com/article"
	  },
	  "headline": "<?php the_title(); ?>",
	  "image": [
	    "<?php $custom_logo_id = get_theme_mod( 'custom_logo' ); $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); echo $image[0]; ?>"
	   ],
	  "datePublished": "<?php the_date( 'c' ); ?>",
	  "dateModified": "<?php the_modified_date( 'c' ); ?>",
	  "author": {
	    "@type": "Person",
	    "name": "<?php the_author_meta( 'display_name' ); ?>"
	  },
	   "publisher": {
	    "@type": "Organization",
	    "name": "<?php echo bloginfo( 'name' ); ?>",
	    "logo": {
	      "@type": "ImageObject",
	      "url": "<?php $custom_logo_id = get_theme_mod( 'custom_logo' ); $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); echo $image[0]; ?>"
	    }
	  },
	  "description": "<?php the_excerpt(); ?>"
	}
</script>
			<div <?php post_class( 'small-12 columns bg' ); ?>>
				<div class="meta">
					<small><?php the_time( 'jS F Y' ); ?> | By <?php the_author(); ?> | <?php the_date(); ?> | <?php the_category(', '); ?> | <?php comments_number( '0', '1', '%' ); ?> <i class="fa fa-comments" aria-hidden="true"></i></small>
				</div>
				<div class="row expanded titleSpace">
					<div class="small-12 columns">
						<h2><?php the_title(); ?></h2>
					</div>
				</div>
			</div>
			<div class="small-12 columns bg">
				<?php the_content(); ?>
			</div>
			<div class="small-12 columns bg">
				<hr>
			</div>
			<div class="small-12 columns bg">
				<?php comments_template( '/comments.php' ); ?>
			</div>

			<?php get_template_part('parts/social', 'share'); ?>

		<?php endwhile; ?>

		<?php else : ?>

		<?php endif; ?>

	</div>
</div>
<?php get_footer(); ?>