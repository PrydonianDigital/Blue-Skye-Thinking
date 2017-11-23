<?php get_header(); ?>

<?php
	$cogs = wp_count_posts( 'cog' );
	$Y = $cogs->publish;
	$X = get_theme_mod( 'bst_cogs' );
	$percent = $Y / $X;
	$total = $percent * 100;
	$final = round($total);
	$actual = round($total);
	if($final > 100) {
		$final = 100;
	}
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "url": "<?php the_permalink(); ?>",
  "name": "<?php the_title(); ?>",
   "author": {
      "@type": "Person",
      "name": "<?php the_author_meta('display_name'); ?>"
    },
  "description": "<?php the_excerpt(); ?>",
  "publisher": "<?php bloginfo('title'); ?>",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "<?php echo get_bloginfo( 'url' ); ?>/?s={search_term}",
    "query-input": "required name=search_term" }
    }
</script>
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
	<div class="row" id="pageImage">
		<?php $percent = get_post_meta( get_the_ID(), '_progress_bar', true ); ?>
		<div class="small-12 columns bg">

			<p><img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/loomstallation.png" alt="Loomstallation" width="1000" height="314" class="aligncenter"/></p>

			<a href="/supporters/">
			<div class="progressalien">
				<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/alien_leftarm.png" alt="alien_leftarm" width="177" height="150" class="leftArm" />
				<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/alien_rightarm.png" alt="alien_rightarm" width="177" height="150" class="rightArm" />
				<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/alien_base.png" alt="alien" width="120" height="102" class="alienBase" />
			</div>
			<div class="warning progress" role="progressbar" tabindex="0" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuetext="<?php echo $final; ?> percent" aria-valuemax="100">
				<div class="progress-meter" data-percent="<?php echo $final; ?>"><p class="progress-meter-text"></p></div>
			</div>
			</a>

			<p><strong><a href="/supporters/"><?php if( $Y >= $X ) { ?> <?php echo get_theme_mod( 'bst_post' ); ?><br/>We've reached <?php echo $actual; ?>% of our goal. Let's keep going!<?php } else { ?>Space Cadets - our mission has launched and we're <?php echo $actual; ?>% of the way there!<?php } ?></a></strong></p>

			<?php the_content(); ?>

			<?php get_template_part('parts/about', 'sub'); ?>

			<?php get_template_part('parts/social', 'share'); ?>
		</div>
	</div>

</div>
<?php endwhile; ?>

<?php else : ?>

<?php endif; ?>

<?php get_footer(); ?>