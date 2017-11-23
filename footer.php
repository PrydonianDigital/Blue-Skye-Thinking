
			<div class="row expanded" id="footer">
				<div class="small-12 medium-4 columns">
					<ul class="widget">
					<?php if ( ! dynamic_sidebar('footer1') ) : ?>
						<li>{static sidebar item 1}</li>
					<?php endif; ?>
					</ul>
				</div>
				<div class="small-12 medium-4 columns">
					<ul class="widget">
					<?php if ( ! dynamic_sidebar('footer2') ) : ?>
						<li>{static sidebar item 1}</li>
					<?php endif; ?>
					</ul>
				</div>
				<div class="small-12 medium-4 columns">
					<?php include_once 'jg/JustGivingClient.php'; ?>
					<?php
						$client = new JustGivingClient('https://api.justgiving.com/', get_theme_mod( 'bst_jgID' ), 1, get_theme_mod( 'bst_jgemail' ), get_theme_mod( 'bst_jgpass' ));
						$page = $client->Page->Retrieve('loomstallation');
						echo $page->pageId . '.';
						echo $page->totalRaisedPercentageOfFundraisingTarget;
						//$page->totalRaisedSms $page->totalRaisedOnline $page->totalRaisedOffline $page->fundraisingTarget
					?>
					<ul class="widget">
					<?php if ( ! dynamic_sidebar('footer3') ) : ?>
						<li>{static sidebar item 1}</li>
					<?php endif; ?>
					</ul>
				</div>
			</div>
			<div class="row expanded footer">
				<div class="small-12 columns">
					<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('title'); ?>.</p>
				</div>
			</div>
		</div>
	</div>

</div>
<div class="donate">
	<a class="button" href="<?php echo get_theme_mod( 'bst_button' ); ?>" <?php $target = get_theme_mod( 'bst_button_target' ); if($target == "1"){ ?>target="_blank"<?php } ?>><img src="<?php echo get_bloginfo( 'template_url' ); ?>/img/Space_Cadet.png" alt="DONATE" width="33" height="31" /> DONATE</a>
</div>

<div class="reveal" id="searchForm" data-reveal data-animation-in="slide-in-up" data-animation-out="slide-out-down">
	<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
		<span class="screen-reader-text"><h3>Search for:</h3></span>
		<div class="input-group">
			<input type="search" class="input-group-field" placeholder="Search …" value="" name="s" title="Search for:" />
			<div class="input-group-button">
				<input type="submit" class="button" value="Search" />
			</div>
		</div>
	</form>
	<button class="close-button" data-close aria-label="Close modal" type="button"><span aria-hidden="true">&times;</span></button>
</div>

<?php wp_footer(); ?>

</body>
</html>