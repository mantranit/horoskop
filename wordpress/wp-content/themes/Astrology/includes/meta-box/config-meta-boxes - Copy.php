<?php
/**
 * File Name: config-meta-boxes.php
 *
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 *
 */

/********************* META BOX DEFINITIONS ***********************/

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
$prefix = 'astrology_';

global $meta_boxes;

$meta_boxes = array();

// 2nd meta box
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'gallery-meta-box',

    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => __('Gallery Images','framework'),

    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array( 'portfolio'),

    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',

    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',

    // List of meta fields
    'fields' => array(
        array(
            'name'             => __('Upload Gallery Images','framework'),
            'id'               => "{$prefix}gallery",
            'desc' => __('Images should have minimum width of 830px and minimum height of 323px, Bigger size images will be cropped automatically.','framework'),
            'type'             => 'image_advanced',
            'max_file_uploads' => 100
        )
    )
);

// 2nd meta box
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'topheaderphoto-meta-box',

    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => __('Subpage Top Header Photo Image','framework'),

    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array( 'page', 'post' ),

    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',

    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',

    // List of meta fields
    'fields' => array(
        array(
            'name'             => __('Upload Image','framework'),
            'id'               => "{$prefix}topheader",
            'desc' => __('Images should have minimum width of 1600px and minimum height of 342px, Bigger size images will be cropped automatically.','framework'),
            'type'             => 'image_advanced',
            'max_file_uploads' => 1
        )
    )
);

// 4th meta box
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'horo_details',

    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => __('Horoscope for day','framework'),

    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array( 'horoscope' ),

    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',

    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',

    // List of meta fields
    'fields' => array(
        // PLUPLOAD IMAGE UPLOAD (WP 3.3+)
        /*array(
            'name'             => __('Property Images*','framework'),
            'id'               => "{$prefix}property_images",
            'desc' => __('Please provide property images, These images will be displayed in slider on property details page. Images should have minimum width of 770px and minimum height of 386px, Bigger size images will be cropped automatically.','framework'),
            'type'             => 'image_advanced',
            'max_file_uploads' => 12
        ),*/
        array(
            'id'        => "{$prefix}horo_aquarius",
            'name'      => __('Horoscope for Aquarius*','framework'),
            //'desc'      => __('Provide property Sale OR Rent Price.','framework'),
            'type'      => 'textarea',
            'std'       => ""
        ),
        array(
            'id'        => "{$prefix}horo_aries",
            'name'      => __('Horoscope for Aries*','framework'),
            //'desc'      => __('Provide property Sale OR Rent Price.','framework'),
            'type'      => 'textarea',
            'std'       => ""
        ),
        array(
            'id'        => "{$prefix}horo_cancer",
            'name'      => __('Horoscope for Cancer*','framework'),
            //'desc'      => __('Provide property Sale OR Rent Price.','framework'),
            'type'      => 'textarea',
            'std'       => ""
        ),
        array(
            'id'        => "{$prefix}horo_capricorn",
            'name'      => __('Horoscope for Capricorn*','framework'),
            //'desc'      => __('Provide property Sale OR Rent Price.','framework'),
            'type'      => 'textarea',
            'std'       => ""
        ),
        array(
            'id'        => "{$prefix}horo_gemini",
            'name'      => __('Horoscope for Gemini*','framework'),
            //'desc'      => __('Provide property Sale OR Rent Price.','framework'),
            'type'      => 'textarea',
            'std'       => ""
        ),
        array(
            'id'        => "{$prefix}horo_leo",
            'name'      => __('Horoscope for Leo*','framework'),
            //'desc'      => __('Provide property Sale OR Rent Price.','framework'),
            'type'      => 'textarea',
            'std'       => ""
        ),
        array(
            'id'        => "{$prefix}horo_libra",
            'name'      => __('Horoscope for Libra*','framework'),
            //'desc'      => __('Provide property Sale OR Rent Price.','framework'),
            'type'      => 'textarea',
            'std'       => ""
        ),
        array(
            'id'        => "{$prefix}horo_pisces",
            'name'      => __('Horoscope for Pisces*','framework'),
            //'desc'      => __('Provide property Sale OR Rent Price.','framework'),
            'type'      => 'textarea',
            'std'       => ""
        ),
        array(
            'id'        => "{$prefix}horo_sagittarius",
            'name'      => __('Horoscope for Sagittarius*','framework'),
            //'desc'      => __('Provide property Sale OR Rent Price.','framework'),
            'type'      => 'textarea',
            'std'       => ""
        ),
        array(
            'id'        => "{$prefix}horo_scorpio",
            'name'      => __('Horoscope for Scorpio*','framework'),
            //'desc'      => __('Provide property Sale OR Rent Price.','framework'),
            'type'      => 'textarea',
            'std'       => ""
        ),
        array(
            'id'        => "{$prefix}horo_taurus",
            'name'      => __('Horoscope for Taurus*','framework'),
            //'desc'      => __('Provide property Sale OR Rent Price.','framework'),
            'type'      => 'textarea',
            'std'       => ""
        ),
        array(
            'id'        => "{$prefix}horo_virgo",
            'name'      => __('Horoscope for Virgo*','framework'),
            //'desc'      => __('Provide property Sale OR Rent Price.','framework'),
            'type'      => 'textarea',
            'std'       => ""
        )
    )
);

/********************* META BOX REGISTERING ***********************/


/**
 * Register meta boxes
 *
 * @return void
 */
function REAL_HOMES_register_meta_boxes()
{
    // Make sure there's no errors when the plugin is deactivated or during upgrade
    if ( !class_exists( 'RW_Meta_Box' ) )
        return;

    global $meta_boxes;
    foreach ( $meta_boxes as $meta_box ){
        new RW_Meta_Box( $meta_box );
    }
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'REAL_HOMES_register_meta_boxes' );

?>