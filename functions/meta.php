<?php

	add_action( 'cmb2_init', 'page_items' );
	function page_items() {
		$front_page_ID = get_option('page_on_front');
		$prefix = '_icons_';
		$icons = new_cmb2_box( array(
			'id'				=> 'show_for_taxonomy_terms',
			'title'				=> 'Scrolling Page Items',
			'object_types'		=> array( 'page', 'post' ),
			'show_in_rest'		=> true,
			'context'			=> 'side',
			'priority'			=> 'low',
		) );
		$icons->add_field( array(
	        'desc'				=> 'No more than 4 per page',
	        'id'				=> $prefix . 'items',
	        'type'				=> 'multicheck',
	        'options'			=> array(
		        'spaceman'		=> 'Spaceman',
		        'meteor'		=> 'Meteor',
		        'jupiter'		=> 'Jupiter',
		        'sputnik'		=> 'Sputnik',
		        'satellite'		=> 'Satellite',
		        'rover'			=> 'Rover',
		        'alien'			=> 'Alien',
		        'rocket'		=> 'Rocket',
		        'shuttle'		=> 'Shuttle',
		        'ufo'			=> 'UFO'
	        )
	    ) );
	}

	add_action( 'cmb2_admin_init', 'cog_info' );
	function cog_info() {
		$prefix = '_cog_';
		$cmb_cog = new_cmb2_box( array(
			'id'				=> 'cog',
			'title'				=> 'Cog Info',
			'object_types'		=> array( 'cog' ),
			'show_in_rest'		=> true
		) );
		$cmb_cog->add_field(array(
			'name'				=> 'Colour',
			'id'				=> $prefix . 'color',
			'type'				=> 'select',
			'options'			=> array(
				'red'			=> 'Red',
				'green'			=> 'Green',
				'purple'		=> 'Purple',
				'orange'		=> 'Orange',
				'yellow'		=> 'Yellow',
				'redstripes'	=> 'Red Stripes',
				'greenspiral'	=> 'Green Spiral',
				'purplezigzags'	=> 'Purple Zig Zags',
				'orangewaves'	=> 'Orange Waves',
				'yellowdots'	=> 'Yellow Dots',
			)
		) );
		$cmb_cog->add_field(array(
			'name'				=> 'Size',
			'id'				=> $prefix . 'size',
			'type'				=> 'select',
			'options'		=> array(
				'small'		=> 'Small',
				'medium'	=> 'Medium',
				'large'		=> 'Large',
			)
		) );
		$cmb_cog->add_field(array(
			'name'				=> 'Logo',
			'id'				=> $prefix . 'logo',
			'type'				=> 'file',
		) );
	}
