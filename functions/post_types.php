<?php

	// Register Custom Cog
	function cogs() {
		$labels = array(
			'name'                  => _x( 'Supporters', 'Cog General Name', 'blueskye' ),
			'singular_name'         => _x( 'Supporter', 'Cog Singular Name', 'blueskye' ),
			'menu_name'             => __( 'Supporters', 'blueskye' ),
			'name_admin_bar'        => __( 'Supporter', 'blueskye' ),
			'archives'              => __( 'Supporters', 'blueskye' ),
			'attributes'            => __( 'Supporter Attributes', 'blueskye' ),
			'parent_item_colon'     => __( 'Parent Supporter:', 'blueskye' ),
			'all_items'             => __( 'All Supporters', 'blueskye' ),
			'add_new_item'          => __( 'Add New Supporter', 'blueskye' ),
			'add_new'               => __( 'Add New', 'blueskye' ),
			'new_item'              => __( 'New Supporter', 'blueskye' ),
			'edit_item'             => __( 'Edit Supporter', 'blueskye' ),
			'update_item'           => __( 'Update Supporter', 'blueskye' ),
			'view_item'             => __( 'View Supporter', 'blueskye' ),
			'view_items'            => __( 'View Supporters', 'blueskye' ),
			'search_items'          => __( 'Search Item', 'blueskye' ),
			'not_found'             => __( 'Not found', 'blueskye' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'blueskye' ),
			'featured_image'        => __( 'Featured Image', 'blueskye' ),
			'set_featured_image'    => __( 'Set featured image', 'blueskye' ),
			'remove_featured_image' => __( 'Remove featured image', 'blueskye' ),
			'use_featured_image'    => __( 'Use as featured image', 'blueskye' ),
			'insert_into_item'      => __( 'Insert into item', 'blueskye' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'blueskye' ),
			'items_list'            => __( 'Items list', 'blueskye' ),
			'items_list_navigation' => __( 'Items list navigation', 'blueskye' ),
			'filter_items_list'     => __( 'Filter items list', 'blueskye' ),
		);
		$args = array(
			'label'                 => __( 'Supporters', 'blueskye' ),
			'description'           => __( 'Supporters', 'blueskye' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'page-attributes' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'				=> 'dashicons-admin-generic',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
			'show_in_rest'          => true,
			'rewrite'				=> array('slug' => 'supporters', 'with_front' => true)
		);
		register_post_type( 'cog', $args );
	}
	add_action( 'init', 'cogs', 0 );

	add_filter( 'template_include', 'portfolio_page_template', 99 );
	function portfolio_page_template( $template ) {
		if ( is_page( 'who-we-work-with' )  ) {
			$new_template = locate_template( array( 'who-we-work-with.php' ) );
			if ( '' != $new_template ) {
				return $new_template;
			}
		}
		return $template;
	}