<?php

	function bst_theme_customiser( $wp_customize ) {

		$wp_customize->add_panel( 'bst_schema', array(
			'priority'			=> 30,
			'theme_supports'	=> '',
			'title'				=> __( 'Blue Skye Thinking Options', 'blueskye' ),
			'capability'		=> 'edit_theme_options',
		) );

		$wp_customize->add_section( 'bst_cogs_section' , array(
			'title'				=> __( 'Cogs', 'blueskye' ),
			'priority'			=> 30,
			'description'		=> 'This section controls the target number of cogs, plus text that appears on the home page about pre and post target.',
			'panel'				=> 'bst_schema',
		) );
		$wp_customize->add_setting( 'bst_cogs' );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bst_cogs', array(
			'label'				=> __( 'Cogs Target', 'blueskye' ),
			'section'			=> 'bst_cogs_section',
			'settings'			=> 'bst_cogs',
			'type'				=> 'input',
		) ) );
		$wp_customize->add_setting( 'bst_post' );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bst_post', array(
			'label'				=> __( 'Post-target Message', 'blueskye' ),
			'section'			=> 'bst_cogs_section',
			'settings'			=> 'bst_post',
			'type'				=> 'input',
		) ) );

		$wp_customize->add_section( 'bst_theme_section' , array(
			'title'				=> __( 'Theme', 'blueskye' ),
			'priority'			=> 30,
			'description'		=> 'This section controls other theme options.',
			'panel'				=> 'bst_schema',
		) );
		$wp_customize->add_setting( 'bst_button' );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bst_button', array(
			'label'				=> __( 'Donate Button URL', 'blueskye' ),
			'section'			=> 'bst_theme_section',
			'settings'			=> 'bst_button',
			'type'				=> 'input',
		) ) );
		$wp_customize->add_setting( 'bst_button_target' );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bst_button_target', array(
			'label'				=> __( 'Open Donate Button link in new window?', 'blueskye' ),
			'section'			=> 'bst_theme_section',
			'settings'			=> 'bst_button_target',
			'type'				=> 'checkbox',
		) ) );
		$wp_customize->add_setting( 'bst_ga' );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bst_ga', array(
			'label'				=> __( 'Google Analytics ID', 'blueskye' ),
			'section'			=> 'bst_theme_section',
			'settings'			=> 'bst_ga',
			'type'				=> 'input',
		) ) );
		$wp_customize->add_setting( 'bst_jgID' );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bst_jgID', array(
			'label'				=> __( 'JustGiving AppID ID', 'blueskye' ),
			'section'			=> 'bst_theme_section',
			'settings'			=> 'bst_jgID',
			'type'				=> 'input',
		) ) );
		$wp_customize->add_setting( 'bst_jgemail' );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bst_jgemail', array(
			'label'				=> __( 'JustGiving Email', 'blueskye' ),
			'section'			=> 'bst_theme_section',
			'settings'			=> 'bst_jgemail',
			'type'				=> 'input',
		) ) );
		$wp_customize->add_setting( 'bst_jgpass' );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bst_jgpass', array(
			'label'				=> __( 'JustGiving Password', 'blueskye' ),
			'section'			=> 'bst_theme_section',
			'settings'			=> 'bst_jgpass',
			'type'				=> 'input',
		) ) );
	}
	add_action( 'customize_register', 'bst_theme_customiser' );