<?php
/**
 * Jellicle Theme Customizer
 *
 * @package Jellicle
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function jellicle_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    // Add Social Media Section
    $wp_customize->add_section( 'social-media' , array(
        'title' => __( 'Social Media', 'jellicle' ),
        'priority' => 30,
        'description' => __( 'Enter the URL to your account for each service for the icon to appear in the header.', 'jellicle' )
    ) );
    // Add Twitter Setting
    $wp_customize->add_setting( 'twitter' , array( 'default' => '' ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter', array(
        'label' => __( 'Twitter', 'jellicle' ),
        'section' => 'social-media',
        'settings' => 'twitter',
    ) ) );
}
add_action( 'customize_register', 'jellicle_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function jellicle_customize_preview_js() {
	wp_enqueue_script( 'jellicle_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'jellicle_customize_preview_js' );
