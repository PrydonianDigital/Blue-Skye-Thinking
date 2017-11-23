<?php get_header(); ?>
<div class="pageContainer">

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
				<div class="cogContainer">

					<div class="cog <?php $color = get_post_meta( get_the_ID(), '_cog_color', true ); echo $color; ?> huge">
						<img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/<?php $color = get_post_meta( get_the_ID(), '_cog_color', true ); echo $color; ?>.png" alt="cog" width="340" height="340" class="cogImg">
						<div class="name">
							<?php $logo = get_post_meta( get_the_ID(), '_cog_logo', true ); if($logo != '') { ?>
								<img src="<?php echo $logo; ?>">
							<?php } else { ?>
								<strong><?php the_title(); ?></strong>
							<?php } ?>
						</div>
					</div>
				</div>
				<h2><br /><a href="/supporters">&larr; All Supporters</a></h2>
			</div>


		<?php endwhile; ?>

		<?php else : ?>

		<?php endif; ?>

	</div>

	<?php get_template_part('parts/social', 'sharecog'); ?>
</div>
<?php get_footer(); ?>