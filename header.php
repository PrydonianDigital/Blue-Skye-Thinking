<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<?php
	$ga = get_theme_mod( 'bst_ga' );
	if($ga != '') {
?>
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $ga; ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo $ga; ?>');
</script>


<?php
	}
?>
</head>

<body <?php body_class(); ?>>

<!-- Site by Prydonian Digital https://prydonian.digital -->

<div class="off-canvas-wrapper">
	<div class="off-canvas position-left" id="blueskyeMenu" data-off-canvas>
		<?php
			wp_nav_menu(array(
	            'container' => false,
	            'menu' => __( 'Mobile Bar Menu', 'textdomain' ),
	            'menu_class' => 'vertical menu',
	            'theme_location' => 'mobile-menu',
	            'items_wrap'      => '<ul id="%1$s" class="%2$s" data-drilldown="">%3$s</ul>',
	            'fallback_cb' => 'f6_drill_menu_fallback',
	            'walker' => new F6_DRILL_MENU_WALKER(),
	        ));
		?>
	</div>
	<div class="off-canvas-content" data-off-canvas-content style="background: url(<?php echo get_bloginfo( 'template_url' ); ?>/img/stars.png); background-position: center top; background-repeat: repeat;" data-paroller-factor="0.5" data-paroller-type="background" data-paroller-direction="vertical">

			<div class="title-bar" data-responsive-toggle="blueskyeMenu" data-hide-for="medium">
				<button class="menu-icon" type="button" data-toggle="blueskyeMenu">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</button>
				<div id="mobileLogo">
					<?php the_custom_logo(); ?>
				</div>
			</div>
			<div class="row expanded align-middle" id="topBar">
				<div class="small-5 columns logo">
					<?php the_custom_logo(); ?>
				</div>
				<div class="small-7 columns">
					<div class="top-bar" id="responsive-menu">
						<div class="top-bar-right">
							<?php
								wp_nav_menu(array(
						            'container' => false,
						            'menu' => __( 'Top Bar Menu', 'textdomain' ),
						            'menu_class' => 'dropdown menu',
						            'theme_location' => 'topbar-Right',
						            'items_wrap'      => '<ul id="%1$s" class="%2$s" data-dropdown-menu data-menu-underline-from-center>%3$s<li class="my-static-link"><a data-open="searchForm"><i class="fa fa-search"></i></a></li></ul>',
						            'fallback_cb' => 'f6_topbar_menu_fallback',
						            'walker' => new F6_TOPBAR_MENU_WALKER(),
						        ));
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="container">