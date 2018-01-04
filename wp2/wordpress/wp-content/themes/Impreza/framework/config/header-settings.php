<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Header Options used by Header Builder plugin.
 * Options and elements' fields are described in USOF-style format.
 */


$social_links = us_config( 'social_links' );

$social_links_config = array();

foreach ( $social_links as $name => $title ) {
	$social_links_config[$name] = array(
		'placeholder' => $title,
		'type' => 'text',
		'classes' => 'for_social cols_3',
	);
}

return array(

	'options' => array(
		'global' => array(
			'breakpoint' => array(
				'title' => __( 'Apply when screen width is less than', 'us' ),
				'type' => 'slider',
				'min' => 300,
				'max' => 1200,
				'std' => 900,
				'postfix' => 'px',
				'show_if' => array(
					// Placing stub condition that will always be true but will force to check this show_if rule
					array( 'orientation', 'in', array( 'hor', 'ver' ) ),
					'and',
					array( 'state', '!=', 'default' ),
				),
			),
			'orientation' => array(
				'title' => __( 'Orientation', 'us' ),
				'type' => 'radio',
				'options' => array(
					'hor' => __( 'Horizontal', 'us' ),
					'ver' => __( 'Vertical', 'us' ),
				),
				'std' => 'hor',
			),
			'sticky' => array(
				'text' => __( 'Sticky Header', 'us' ),
				'type' => 'switch',
				'description' => __( 'Fix the header at the top of a page during scroll', 'us' ),
				'std' => 1,
				'classes' => 'desc_2',
				'show_if' => array( 'orientation', '=', 'hor' ),
			),
			'scroll_breakpoint' => array(
				'title' => __( 'Header Scroll Breakpoint', 'us' ),
				'description' => __( 'This option sets scroll distance from the top of a page after which the sticky header will be shrunk', 'us' ),
				'type' => 'slider',
				'min' => 1,
				'max' => 200,
				'std' => 100,
				'postfix' => 'px',
				'classes' => 'desc_2 desc_fix',
				'show_if' => array(
					array( 'orientation', '=', 'hor' ),
					'and',
					array( 'sticky', '=', TRUE ),
				),
			),
			'transparent' => array(
				'text' => __( 'Transparent Header', 'us' ),
				'type' => 'switch',
				'description' => __( 'Make the header transparent at its initial position', 'us' ),
				'std' => 0,
				'classes' => 'desc_2',
				'show_if' => array( 'orientation', '=', 'hor' ),
			),
			'width' => array(
				'title' => __( 'Header Width', 'us' ),
				'type' => 'slider',
				'min' => 200,
				'max' => 400,
				'std' => 300,
				'postfix' => 'px',
				'show_if' => array( 'orientation', '=', 'ver' ),
			),
			'elm_align' => array(
				'title' => __( 'Elements Alignment', 'us' ),
				'type' => 'radio',
				'options' => array(
					'left' => us_translate( 'Left' ),
					'center' => us_translate( 'Center' ),
					'right' => us_translate( 'Right' ),
				),
				'std' => 'center',
				'show_if' => array( 'orientation', '=', 'ver' ),
			),
			'shadow' => array(
				'title' => __( 'Header Shadow', 'us' ),
				'type' => 'radio',
				'options' => array(
					'none' => us_translate( 'None' ),
					'thin' => __( 'Thin', 'us' ),
					'wide' => __( 'Wide', 'us' ),
				),
				'std' => 'thin',
			),
		),
		'top' => array(
			'top_show' => array(
				'text' => __( 'Show Area', 'us' ),
				'type' => 'switch',
				'std' => 1,
			),
			'top_height' => array(
				'title' => __( 'Area Height', 'us' ),
				'type' => 'slider',
				'min' => 40,
				'max' => 300,
				'std' => 40,
				'postfix' => 'px',
				'show_if' => array(
					array( 'top_show', '=', TRUE ),
					'and',
					array( 'orientation', '=', 'hor' ),
				),
			),
			'top_sticky_height' => array(
				'title' => __( 'Sticky Area Height', 'us' ),
				'type' => 'slider',
				'min' => 0,
				'max' => 300,
				'std' => 40,
				'postfix' => 'px',
				'show_if' => array(
					array( 'sticky', '=', TRUE ),
					'and',
					array( 'top_show', '=', TRUE ),
					'and',
					array( 'orientation', '=', 'hor' ),
				),
			),
			'top_fullwidth' => array(
				'text' => __( 'Full Width Content', 'us' ),
				'type' => 'switch',
				'std' => 0,
				'show_if' => array(
					array( 'top_show', '=', TRUE ),
					'and',
					array( 'orientation', '=', 'hor' ),
					'and',
					array( 'state', '=', 'default' ),
				),
			),
		),
		'middle' => array(
			'middle_height' => array(
				'title' => __( 'Area Height', 'us' ),
				'type' => 'slider',
				'min' => 40,
				'max' => 300,
				'std' => 100,
				'postfix' => 'px',
				'show_if' => array( 'orientation', '=', 'hor' ),
			),
			'middle_sticky_height' => array(
				'title' => __( 'Sticky Area Height', 'us' ),
				'type' => 'slider',
				'min' => 0,
				'max' => 300,
				'std' => 60,
				'postfix' => 'px',
				'show_if' => array(
					array( 'sticky', '=', TRUE ),
					'and',
					array( 'orientation', '=', 'hor' ),
				),
			),
			'middle_fullwidth' => array(
				'text' => __( 'Full Width Content', 'us' ),
				'type' => 'switch',
				'std' => 0,
				'show_if' => array(
					array( 'orientation', '=', 'hor' ),
					'and',
					array( 'state', '=', 'default' ),
				),
			),
			'elm_valign' => array(
				'title' => __( 'Elements Vertical Alignment', 'us' ),
				'type' => 'radio',
				'options' => array(
					'top' => us_translate( 'Top' ),
					'middle' => us_translate( 'Middle' ),
					'bottom' => us_translate( 'Bottom' ),
				),
				'std' => 'top',
				'show_if' => array(
					array( 'orientation', '=', 'ver' ),
					'and',
					array( 'state', '=', 'default' ),
				),
			),
			'bg_img' => array(
				'title' => __( 'Background Image', 'us' ),
				'type' => 'upload',
				'std' => '',
			),
			'bg_img_wrapper_start' => array(
				'type' => 'wrapper_start',
				'show_if' => array( 'bg_img', '!=', '' ),
			),
			'bg_img_size' => array(
				'title' => __( 'Background Image Size', 'us' ),
				'type' => 'select',
				'options' => array(
					'cover' => __( 'Fill Area', 'us' ),
					'contain' => __( 'Fit to Area', 'us' ),
					'initial' => __( 'Initial', 'us' ),
				),
				'std' => 'cover',
			),
			'bg_img_repeat' => array(
				'title' => __( 'Background Image Repeat', 'us' ),
				'type' => 'select',
				'options' => array(
					'repeat' => __( 'Repeat', 'us' ),
					'repeat-x' => __( 'Horizontally', 'us' ),
					'repeat-y' => __( 'Vertically', 'us' ),
					'no-repeat' => us_translate( 'None' ),
				),
				'std' => 'repeat',
			),
			'bg_img_position' => array(
				'title' => __( 'Background Image Position', 'us' ),
				'type' => 'radio',
				'options' => array(
					'top left' => '<span class="dashicons dashicons-arrow-left-alt"></span>',
					'top center' => '<span class="dashicons dashicons-arrow-up-alt"></span>',
					'top right' => '<span class="dashicons dashicons-arrow-right-alt"></span>',
					'center left' => '<span class="dashicons dashicons-arrow-left-alt"></span>',
					'center center' => '<span class="dashicons dashicons-marker"></span>',
					'center right' => '<span class="dashicons dashicons-arrow-right-alt"></span>',
					'bottom left' => '<span class="dashicons dashicons-arrow-left-alt"></span>',
					'bottom center' => '<span class="dashicons dashicons-arrow-down-alt"></span>',
					'bottom right' => '<span class="dashicons dashicons-arrow-right-alt"></span>',
				),
				'std' => 'top left',
				'classes' => 'bgpos',
			),
			'bg_img_attachment' => array(
				'type' => 'switch',
				'text' => us_translate( 'Scroll with Page' ),
				'std' => 1,
			),
			'bgimage_wrapper_end' => array(
				'type' => 'wrapper_end',
			),
		),
		'bottom' => array(
			'bottom_show' => array(
				'text' => __( 'Show Area', 'us' ),
				'type' => 'switch',
				'std' => 1,
			),
			'bottom_height' => array(
				'title' => __( 'Area Height', 'us' ),
				'type' => 'slider',
				'min' => 40,
				'max' => 300,
				'std' => 50,
				'postfix' => 'px',
				'show_if' => array(
					array( 'bottom_show', '=', TRUE ),
					'and',
					array( 'orientation', '=', 'hor' ),
				),
			),
			'bottom_sticky_height' => array(
				'title' => __( 'Sticky Area Height', 'us' ),
				'type' => 'slider',
				'min' => 0,
				'max' => 300,
				'std' => 50,
				'postfix' => 'px',
				'show_if' => array(
					array( 'sticky', '=', TRUE ),
					'and',
					array( 'bottom_show', '=', TRUE ),
					'and',
					array( 'orientation', '=', 'hor' ),
				),
			),
			'bottom_fullwidth' => array(
				'text' => __( 'Full Width Content', 'us' ),
				'type' => 'switch',
				'std' => 0,
				'show_if' => array(
					array( 'bottom_show', '=', TRUE ),
					'and',
					array( 'orientation', '=', 'hor' ),
					'and',
					array( 'state', '=', 'default' ),
				),
			),
		),
	),
	'elements' => array(
		'text' => array(
			'title' => us_translate( 'Text' ),
			'params' => array(
				'text' => array(
					'title' => us_translate( 'Text' ),
					'type' => 'text',
					'std' => 'Some text',
				),
				'link' => array(
					'title' => __( 'Link (optional)', 'us' ),
					'type' => 'link',
					'std' => array(
						'url' => '',
						'target' => '',
					),
				),
				'icon' => array(
					'title' => __( 'Icon', 'us' ),
					'description' => sprintf( __( '%s or %s icon name', 'us' ), '<a href="http://fontawesome.io/icons/" target="_blank">Font Awesome</a>', '<a href="https://material.io/icons/" target="_blank">Material</a>' ),
					'type' => 'text',
					'std' => '',
					'classes' => 'cols_2 desc_1',
				),
				'font' => array(
					'title' => __( 'Use Font from', 'us' ),
					'type' => 'select',
					'options' => array(
						'regular' => __( 'Regular Text', 'us' ),
						'heading' => __( 'Headings', 'us' ),
						'main_menu' => __( 'Header Menu', 'us' ),
					),
					'std' => 'regular',
					'classes' => 'cols_2',
				),
				'color' => array(
					'title' => us_translate( 'Custom color' ),
					'type' => 'color',
					'std' => '',
					'classes' => 'cols_2',
				),
				'wrap' => array(
					'title' => __( 'Line Wrapping', 'us' ),
					'type' => 'switch',
					'text' => __( 'Wrap text to the next line', 'us' ),
					'std' => 0,
					'classes' => 'cols_2',
				),
				'size' => array(
					'title' => us_translate( 'Size' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'std' => 13,
					'postfix' => 'px',
					'group' => __( 'Sizes', 'us' ),
				),
				'size_tablets' => array(
					'title' => __( 'Size on Tablets', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'std' => 13,
					'postfix' => 'px',
					'classes' => 'cols_2',
					'group' => __( 'Sizes', 'us' ),
				),
				'size_mobiles' => array(
					'title' => __( 'Size on Mobiles', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'std' => 13,
					'postfix' => 'px',
					'classes' => 'cols_2',
					'group' => __( 'Sizes', 'us' ),
				),
				'design_options' => array(
					'type' => 'design_options',
					'std' => '',
					'group' => __( 'More Options', 'us' ),
				),
			),
		),
		'image' => array(
			'title' => us_translate( 'Image' ),
			'params' => array(
				'img' => array(
					'type' => 'upload',
					'std' => '',
					'extension' => 'png,jpg,jpeg,gif,svg',
				),
				'link' => array(
					'title' => __( 'Image link', 'us' ),
					'placeholder' => us_translate( 'Enter the URL' ),
					'type' => 'link',
					'std' => array(
						'url' => '',
						'target' => '',
					),
				),
				'img_transparent' => array(
					'title' => __( 'Different Image for Transparent Header', 'us' ),
					'type' => 'upload',
					'std' => '',
					'extension' => 'png,jpg,jpeg,gif,svg',
				),
				'heading_1' => array(
					'title' => __( 'Default Sizes', 'us' ),
					'type' => 'heading',
					'group' => __( 'Sizes', 'us' ),
				),
				'height' => array(
					'title' => us_translate( 'Height' ),
					'type' => 'slider',
					'min' => 20,
					'max' => 300,
					'std' => 35,
					'postfix' => 'px',
					'group' => __( 'Sizes', 'us' ),
				),
				'height_tablets' => array(
					'title' => __( 'Height on Tablets', 'us' ),
					'type' => 'slider',
					'min' => 20,
					'max' => 300,
					'std' => 30,
					'postfix' => 'px',
					'classes' => 'cols_2',
					'group' => __( 'Sizes', 'us' ),
				),
				'height_mobiles' => array(
					'title' => __( 'Height on Mobiles', 'us' ),
					'type' => 'slider',
					'min' => 20,
					'max' => 300,
					'std' => 20,
					'postfix' => 'px',
					'classes' => 'cols_2',
					'group' => __( 'Sizes', 'us' ),
				),
				'heading_2' => array(
					'title' => __( 'Sizes in the Sticky Header', 'us' ),
					'type' => 'heading',
					'group' => __( 'Sizes', 'us' ),
				),
				'height_sticky' => array(
					'title' => us_translate( 'Height' ),
					'type' => 'slider',
					'min' => 20,
					'max' => 300,
					'std' => 35,
					'postfix' => 'px',
					'group' => __( 'Sizes', 'us' ),
				),
				'height_sticky_tablets' => array(
					'title' => __( 'Height on Tablets', 'us' ),
					'type' => 'slider',
					'min' => 20,
					'max' => 300,
					'std' => 30,
					'postfix' => 'px',
					'classes' => 'cols_2',
					'group' => __( 'Sizes', 'us' ),
				),
				'height_sticky_mobiles' => array(
					'title' => __( 'Height on Mobiles', 'us' ),
					'type' => 'slider',
					'min' => 20,
					'max' => 300,
					'std' => 20,
					'postfix' => 'px',
					'classes' => 'cols_2',
					'group' => __( 'Sizes', 'us' ),
				),
				'design_options' => array(
					'type' => 'design_options',
					'std' => '',
					'group' => __( 'More Options', 'us' ),
				),
			),
		),
		'menu' => array(
			'title' => us_translate( 'Menu' ),
			'params' => array(
				'source' => array(
					'title' => us_translate( 'Menu' ),
					'description' => sprintf( __( 'You can edit selected menu or create a new one on the %s page', 'us' ), '<a href="' . admin_url( 'nav-menus.php' ) . '" target="_blank">' . us_translate( 'Menus' ) . '</a>' ),
					'type' => 'select',
					'options' => us_get_nav_menus(),
					'std' => 'header-menu',
					'classes' => 'desc_1',
				),
				'font_size' => array(
					'title' => __( 'Main Items Font Size', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'step' => 1,
					'std' => 16,
					'postfix' => 'px',
				),
				'indents' => array(
					'title' => __( 'Distance Between Main Items', 'us' ),
					'type' => 'slider',
					'min' => 10,
					'max' => 100,
					'step' => 2,
					'std' => 40,
					'postfix' => 'px',
					'classes' => 'desc_2',
				),
				'vstretch' => array(
					'title' => __( 'Main Items Height', 'us' ),
					'type' => 'switch',
					'text' => __( 'Stretch to the full available height', 'us' ),
					'std' => 1,
				),
				'hover_effect' => array(
					'title' => __( 'Main Items Hover Effect', 'us' ),
					'type' => 'select',
					'options' => array(
						'simple' => __( 'Simple', 'us' ),
						'underline' => us_translate( 'Underline' ),
					),
					'std' => 'simple',
				),
				'dropdown_arrow' => array(
					'title' => __( 'Dropdown Indication', 'us' ),
					'type' => 'switch',
					'text' => __( 'Show arrows for main items with dropdown', 'us' ),
					'std' => 0,
					'group' => __( 'Dropdowns', 'us' ),
				),
				'dropdown_effect' => array(
					'title' => __( 'Dropdown Effect', 'us' ),
					'type' => 'select',
					'options' => array(
						'none' => us_translate( 'None' ),
						'opacity' => __( 'Fade', 'us' ),
						'slide' => __( 'SlideDown', 'us' ),
						'height' => __( 'Fade + SlideDown', 'us' ),
						'afb' => __( 'Appear From Bottom', 'us' ),
						'hor' => __( 'Horizontal Slide', 'us' ),
						'mdesign' => __( 'Material Design Effect', 'us' ),
					),
					'std' => 'height',
					'group' => __( 'Dropdowns', 'us' ),
				),
				'dropdown_font_size' => array(
					'title' => __( 'Dropdown Font Size', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'step' => 1,
					'std' => 15,
					'postfix' => 'px',
					'group' => __( 'Dropdowns', 'us' ),
				),
				'dropdown_width' => array(
					'title' => __( 'Dropdown Width', 'us' ),
					'type' => 'switch',
					'text' => __( 'Limit full-width dropdowns by a menu width', 'us' ),
					'std' => 0,
					'group' => __( 'Dropdowns', 'us' ),
				),
				'mobile_width' => array(
					'title' => __( 'Enable mobile layout when screen width is less than', 'us' ),
					'type' => 'slider',
					'min' => 300,
					'max' => 2000,
					'step' => 10,
					'std' => 900,
					'postfix' => 'px',
					'group' => __( 'Mobile Menu', 'us' ),
				),
				'mobile_font_size' => array(
					'title' => __( 'Main Items Font Size', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'step' => 1,
					'std' => 15,
					'postfix' => 'px',
					'group' => __( 'Mobile Menu', 'us' ),
				),
				'mobile_dropdown_font_size' => array(
					'title' => __( 'Dropdown Font Size', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'step' => 1,
					'std' => 14,
					'postfix' => 'px',
					'group' => __( 'Mobile Menu', 'us' ),
				),
				'mobile_behavior' => array(
					'title' => __( 'Dropdown Behavior', 'us' ),
					'description' => __( 'When this option is OFF, mobile menu dropdown will be shown by click on an arrow only.', 'us' ),
					'type' => 'switch',
					'text' => __( 'Show dropdown by click on menu item title', 'us' ),
					'std' => 1,
					'classes' => 'desc_2',
					'group' => __( 'Mobile Menu', 'us' ),
				),
				'design_options' => array(
					'type' => 'design_options',
					'std' => '',
					'group' => __( 'More Options', 'us' ),
				),
			),
		),
		'additional_menu' => array(
			'title' => __( 'Links Menu', 'us' ),
			'params' => array(
				'source' => array(
					'title' => us_translate( 'Menu' ),
					'description' => sprintf( __( 'You can edit selected menu or create a new one on the %s page', 'us' ), '<a href="' . admin_url( 'nav-menus.php' ) . '" target="_blank">' . us_translate( 'Menus' ) . '</a>' ),
					'type' => 'select',
					'options' => us_get_nav_menus(),
					'std' => '',
					'classes' => 'desc_1',
				),
				'size' => array(
					'title' => __( 'Font Size', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'std' => 13,
					'postfix' => 'px',
					'group' => __( 'Sizes', 'us' ),
				),
				'size_tablets' => array(
					'title' => __( 'Font Size on Tablets', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'std' => 13,
					'postfix' => 'px',
					'classes' => 'cols_2',
					'group' => __( 'Sizes', 'us' ),
				),
				'size_mobiles' => array(
					'title' => __( 'Font Size on Mobiles', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'std' => 13,
					'postfix' => 'px',
					'classes' => 'cols_2',
					'group' => __( 'Sizes', 'us' ),
				),
				'indents' => array(
					'title' => __( 'Items Indents', 'us' ),
					'type' => 'slider',
					'min' => 10,
					'max' => 80,
					'step' => 2,
					'std' => 20,
					'postfix' => 'px',
					'group' => __( 'Sizes', 'us' ),
				),
				'indents_tablets' => array(
					'title' => __( 'Items Indents on Tablets', 'us' ),
					'type' => 'slider',
					'min' => 10,
					'max' => 80,
					'step' => 2,
					'std' => 20,
					'postfix' => 'px',
					'classes' => 'cols_2',
					'group' => __( 'Sizes', 'us' ),
				),
				'indents_mobiles' => array(
					'title' => __( 'Items Indents on Mobiles', 'us' ),
					'type' => 'slider',
					'min' => 10,
					'max' => 80,
					'step' => 2,
					'std' => 20,
					'postfix' => 'px',
					'classes' => 'cols_2',
					'group' => __( 'Sizes', 'us' ),
				),
				'design_options' => array(
					'type' => 'design_options',
					'std' => '',
					'group' => __( 'More Options', 'us' ),
				),
			),
			'std' => array(),
		),
		'search' => array(
			'title' => us_translate( 'Search' ),
			'params' => array(
				'text' => array(
					'title' => __( 'Placeholder Text', 'us' ),
					'type' => 'text',
					'std' => us_translate( 'Search' ),
				),
				'layout' => array(
					'title' => __( 'Layout', 'us' ),
					'type' => 'select',
					'options' => array(
						'simple' => __( 'Simple', 'us' ),
						'modern' => __( 'Modern', 'us' ),
						'fullwidth' => __( 'Full Width', 'us' ),
						'fullscreen' => __( 'Full Screen', 'us' ),
					),
					'std' => 'fullwidth',
				),
				'width' => array(
					'title' => __( 'Field Width', 'us' ),
					'type' => 'slider',
					'min' => 200,
					'max' => 800,
					'std' => 240,
					'postfix' => 'px',
					'classes' => 'cols_2',
					'show_if' => array( 'layout', 'in', array( 'simple', 'modern' ) ),
				),
				'width_tablets' => array(
					'title' => __( 'Field Width on Tablets', 'us' ),
					'type' => 'slider',
					'min' => 200,
					'max' => 600,
					'std' => 200,
					'postfix' => 'px',
					'classes' => 'cols_2',
					'show_if' => array( 'layout', 'in', array( 'simple', 'modern' ) ),
				),
				'product_search' => array(
					'type' => 'switch',
					'text' => __( 'Search in Shop Products only', 'us' ),
					'place_if' => class_exists( 'woocommerce' ),
					'std' => 0,
				),
				'design_options' => array(
					'type' => 'design_options',
					'std' => '',
					'group' => __( 'More Options', 'us' ),
				),
			),
		),
		'dropdown' => array(
			'title' => __( 'Dropdown', 'us' ),
			'params' => array(
				'source' => array(
					'title' => us_translate( 'Source' ),
					'type' => 'select',
					'options' => array(
						'own' => __( 'My own links', 'us' ),
						'wpml' => 'WPML',
						'polylang' => 'Polylang',
						'qtranslate' => 'qTranslate X',
					),
					'std' => 'own',
				),
				'wpml_switcher' => array(
					'type' => 'checkboxes',
					'options' => array(
						'flag' => us_translate( 'Flag', 'sitepress' ),
						'native_lang' => us_translate( 'Native language name', 'sitepress' ),
						'display_lang' => us_translate( 'Language name in current language', 'sitepress' ),
					),
					'std' => array( 'native_lang', 'display_lang' ),
					'show_if' => array( 'source', '=', 'wpml' ),
				),
				'link_title' => array(
					'title' => __( 'Links Title', 'us' ),
					'description' => __( 'This text will be shown as the first active item of the dropdown menu.', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array( 'source', '=', 'own' ),
					'classes' => 'desc_2',
				),
				'link_qty' => array(
					'title' => __( 'Links Quantity', 'us' ),
					'type' => 'radio',
					'options' => array(
						'1' => '1',
						'2' => '2',
						'3' => '3',
						'4' => '4',
						'5' => '5',
						'6' => '6',
						'7' => '7',
						'8' => '8',
						'9' => '9',
					),
					'std' => '3',
					'show_if' => array( 'source', '=', 'own' ),
				),
				'link_1_label' => array(
					'placeholder' => __( 'Link Label', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array( 'source', '=', 'own' ),
					'classes' => 'cols_2',
				),
				'link_1_url' => array(
					'placeholder' => us_translate( 'Enter the URL' ),
					'type' => 'link',
					'std' => array(
						'url' => '',
						'target' => '',
					),
					'show_if' => array( 'source', '=', 'own' ),
					'classes' => 'cols_2',
				),
				'link_2_label' => array(
					'placeholder' => __( 'Link Label', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 1 ),
					),
					'classes' => 'cols_2',
				),
				'link_2_url' => array(
					'placeholder' => us_translate( 'Enter the URL' ),
					'type' => 'link',
					'std' => array(
						'url' => '',
						'target' => '',
					),
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 1 ),
					),
					'classes' => 'cols_2',
				),
				'link_3_label' => array(
					'placeholder' => __( 'Link Label', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 2 ),
					),
					'classes' => 'cols_2',
				),
				'link_3_url' => array(
					'placeholder' => us_translate( 'Enter the URL' ),
					'type' => 'link',
					'std' => array(
						'url' => '',
						'target' => '',
					),
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 2 ),
					),
					'classes' => 'cols_2',
				),
				'link_4_label' => array(
					'placeholder' => __( 'Link Label', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 3 ),
					),
					'classes' => 'cols_2',
				),
				'link_4_url' => array(
					'placeholder' => us_translate( 'Enter the URL' ),
					'type' => 'link',
					'std' => array(
						'url' => '',
						'target' => '',
					),
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 3 ),
					),
					'classes' => 'cols_2',
				),
				'link_5_label' => array(
					'placeholder' => __( 'Link Label', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 4 ),
					),
					'classes' => 'cols_2',
				),
				'link_5_url' => array(
					'placeholder' => us_translate( 'Enter the URL' ),
					'type' => 'link',
					'std' => array(
						'url' => '',
						'target' => '',
					),
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 4 ),
					),
					'classes' => 'cols_2',
				),
				'link_6_label' => array(
					'placeholder' => __( 'Link Label', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 5 ),
					),
					'classes' => 'cols_2',
				),
				'link_6_url' => array(
					'placeholder' => us_translate( 'Enter the URL' ),
					'type' => 'link',
					'std' => array(
						'url' => '',
						'target' => '',
					),
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 5 ),
					),
					'classes' => 'cols_2',
				),
				'link_7_label' => array(
					'placeholder' => __( 'Link Label', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 6 ),
					),
					'classes' => 'cols_2',
				),
				'link_7_url' => array(
					'placeholder' => us_translate( 'Enter the URL' ),
					'type' => 'link',
					'std' => array(
						'url' => '',
						'target' => '',
					),
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 6 ),
					),
					'classes' => 'cols_2',
				),
				'link_8_label' => array(
					'placeholder' => __( 'Link Label', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 7 ),
					),
					'classes' => 'cols_2',
				),
				'link_8_url' => array(
					'placeholder' => us_translate( 'Enter the URL' ),
					'type' => 'link',
					'std' => array(
						'url' => '',
						'target' => '',
					),
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 7 ),
					),
					'classes' => 'cols_2',
				),
				'link_9_label' => array(
					'placeholder' => __( 'Link Label', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 8 ),
					),
					'classes' => 'cols_2',
				),
				'link_9_url' => array(
					'placeholder' => us_translate( 'Enter the URL' ),
					'type' => 'link',
					'std' => array(
						'url' => '',
						'target' => '',
					),
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 8 ),
					),
					'classes' => 'cols_2',
				),
				'size' => array(
					'title' => us_translate( 'Size' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'std' => 13,
					'postfix' => 'px',
					'group' => __( 'Sizes', 'us' ),
				),
				'size_tablets' => array(
					'title' => __( 'Size on Tablets', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'std' => 13,
					'postfix' => 'px',
					'classes' => 'cols_2',
					'group' => __( 'Sizes', 'us' ),
				),
				'size_mobiles' => array(
					'title' => __( 'Size on Mobiles', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'std' => 13,
					'postfix' => 'px',
					'classes' => 'cols_2',
					'group' => __( 'Sizes', 'us' ),
				),
				'design_options' => array(
					'type' => 'design_options',
					'std' => '',
					'group' => __( 'More Options', 'us' ),
				),
			),
		),
		'socials' => array(
			'title' => __( 'Social Links', 'us' ),
			'params' => array_merge(
				array(
					'color' => array(
						'title' => __( 'Icons Color', 'us' ),
						'type' => 'select',
						'options' => array(
							'brand' => __( 'Default brand colors', 'us' ),
							'text' => __( 'Text (theme color)', 'us' ),
						),
						'std' => 'text',
						'classes' => 'cols_2',
					),
					'hover' => array(
						'title' => __( 'Hover Style', 'us' ),
						'type' => 'select',
						'options' => array(
							'default' => us_translate( 'Default' ),
							'none' => us_translate( 'None' ),
						),
						'std' => 'default',
						'classes' => 'cols_2',
					),
				), $social_links_config, array(
					'custom_icon' => array(
						'title' => __( 'Custom Link Icon', 'us' ),
						'description' => sprintf( __( '%s or %s icon name', 'us' ), '<a href="http://fontawesome.io/icons/" target="_blank">Font Awesome</a>', '<a href="https://material.io/icons/" target="_blank">Material</a>' ),
						'type' => 'text',
						'std' => '',
						'classes' => 'cols_2 desc_1',
					),
					'custom_url' => array(
						'title' => __( 'Custom Link', 'us' ),
						'type' => 'text',
						'std' => '',
						'classes' => 'cols_2',
					),
					'custom_title' => array(
						'title' => __( 'Custom Link Title', 'us' ),
						'type' => 'text',
						'std' => '',
						'classes' => 'cols_2',
					),
					'custom_color' => array(
						'type' => 'color',
						'title' => __( 'Custom Link Color', 'us' ),
						'std' => '#1abc9c',
						'classes' => 'cols_2',
					),
					'size' => array(
						'title' => us_translate( 'Size' ),
						'type' => 'slider',
						'min' => 15,
						'max' => 30,
						'std' => 18,
						'postfix' => 'px',
						'group' => __( 'Sizes', 'us' ),
					),
					'size_tablets' => array(
						'title' => __( 'Size on Tablets', 'us' ),
						'type' => 'slider',
						'min' => 15,
						'max' => 30,
						'std' => 18,
						'postfix' => 'px',
						'classes' => 'cols_2',
						'group' => __( 'Sizes', 'us' ),
					),
					'size_mobiles' => array(
						'title' => __( 'Size on Mobiles', 'us' ),
						'type' => 'slider',
						'min' => 15,
						'max' => 30,
						'std' => 18,
						'postfix' => 'px',
						'classes' => 'cols_2',
						'group' => __( 'Sizes', 'us' ),
					),
					'design_options' => array(
						'type' => 'design_options',
						'std' => '',
						'group' => __( 'More Options', 'us' ),
					),
				)
			),
		),
		'btn' => array(
			'title' => __( 'Button', 'us' ),
			'params' => array(
				'label' => array(
					'title' => __( 'Button Label', 'us' ),
					'type' => 'text',
					'std' => 'Click Me',
					'classes' => 'cols_2',
				),
				'link' => array(
					'title' => __( 'Button Link', 'us' ),
					'placeholder' => us_translate( 'Enter the URL' ),
					'type' => 'link',
					'std' => array(
						'url' => '',
						'target' => '',
					),
					'classes' => 'cols_2',
				),
				'style' => array(
					'title' => __( 'Button Style', 'us' ),
					'type' => 'select',
					'options' => array(
						'solid' => __( 'Solid', 'us' ),
						'outlined' => __( 'Outlined', 'us' ),
					),
					'std' => 'solid',
				),
				'icon' => array(
					'title' => __( 'Icon', 'us' ),
					'description' => sprintf( __( '%s or %s icon name', 'us' ), '<a href="http://fontawesome.io/icons/" target="_blank">Font Awesome</a>', '<a href="https://material.io/icons/" target="_blank">Material</a>' ),
					'type' => 'text',
					'std' => '',
					'classes' => 'cols_2 desc_1',
				),
				'iconpos' => array(
					'title' => __( 'Icon Position', 'us' ),
					'type' => 'radio',
					'options' => array(
						'left' => us_translate( 'Left' ),
						'right' => us_translate( 'Right' ),
					),
					'std' => 'left',
					'classes' => 'cols_2',
				),
				'size' => array(
					'title' => us_translate( 'Size' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 30,
					'std' => 13,
					'postfix' => 'px',
					'group' => __( 'Sizes', 'us' ),
				),
				'size_tablets' => array(
					'title' => __( 'Size on Tablets', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 30,
					'std' => 12,
					'postfix' => 'px',
					'classes' => 'cols_2',
					'group' => __( 'Sizes', 'us' ),
				),
				'size_mobiles' => array(
					'title' => __( 'Size on Mobiles', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 30,
					'std' => 11,
					'postfix' => 'px',
					'classes' => 'cols_2',
					'group' => __( 'Sizes', 'us' ),
				),
				'color_bg' => array(
					'type' => 'color',
					'title' => __( 'Background Color', 'us' ),
					'std' => '=color_menu_button_bg',
					'classes' => 'cols_2',
					'group' => us_translate( 'Colors' ),
				),
				'color_hover_bg' => array(
					'type' => 'color',
					'title' => __( 'Hover Background Color', 'us' ),
					'std' => '=color_menu_button_hover_bg',
					'classes' => 'cols_2',
					'group' => us_translate( 'Colors' ),
				),
				'color_text' => array(
					'type' => 'color',
					'title' => __( 'Text Color', 'us' ),
					'std' => '=color_menu_button_text',
					'classes' => 'cols_2',
					'group' => us_translate( 'Colors' ),
				),
				'color_hover_text' => array(
					'type' => 'color',
					'title' => __( 'Hover Text Color', 'us' ),
					'std' => '=color_menu_button_hover_text',
					'classes' => 'cols_2',
					'group' => us_translate( 'Colors' ),
				),
				'design_options' => array(
					'type' => 'design_options',
					'std' => '',
					'group' => __( 'More Options', 'us' ),
				),
			),
		),
		'html' => array(
			'title' => __( 'Custom HTML', 'us' ),
			'params' => array(
				'content' => array(
					'description' => sprintf( __( 'Added content will be displayed inside the %s block', 'us' ), '<code>&lt;div class="w-html"&gt;&lt;/div&gt;</code>' ),
					'type' => 'html',
					'std' => '',
					'classes' => 'desc_2',
				),
				'design_options' => array(
					'type' => 'design_options',
					'std' => '',
					'group' => __( 'More Options', 'us' ),
				),
			),
		),
		'cart' => array(
			'title' => __( 'Cart', 'us' ),
			'params' => array(
				'icon' => array(
					'title' => __( 'Icon', 'us' ),
					'description' => sprintf( __( '%s or %s icon name', 'us' ), '<a href="http://fontawesome.io/icons/" target="_blank">Font Awesome</a>', '<a href="https://material.io/icons/" target="_blank">Material</a>' ),
					'type' => 'text',
					'std' => 'fa-shopping-cart',
					'classes' => 'desc_1',
				),
				'vstretch' => array(
					'title' => us_translate( 'Height' ),
					'type' => 'switch',
					'text' => __( 'Stretch to the full available height', 'us' ),
					'std' => 1,
				),
				// 'dropdown_direction' => array(
					// 'title' => __( 'Dropdown Direction', 'us' ),
					// 'type' => 'radio',
					// 'options' => array(
						// 'left' => us_translate( 'Left' ),
						// 'right' => us_translate( 'Right' ),
					// ),
					// 'std' => 'left',
				// ),
				'dropdown_effect' => array(
					'title' => __( 'Dropdown Effect', 'us' ),
					'type' => 'select',
					'options' => array(
						'none' => us_translate( 'None' ),
						'opacity' => __( 'Fade', 'us' ),
						'slide' => __( 'SlideDown', 'us' ),
						'height' => __( 'Fade + SlideDown', 'us' ),
						'afb' => __( 'Appear From Bottom', 'us' ),
						'hor' => __( 'Horizontal Slide', 'us' ),
						'mdesign' => __( 'Material Design Effect', 'us' ),
					),
					'std' => 'height',
				),
				'size' => array(
					'title' => __( 'Font Size', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'std' => 20,
					'postfix' => 'px',
					'group' => __( 'Sizes', 'us' ),
				),
				'size_tablets' => array(
					'title' => __( 'Font Size on Tablets', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'std' => 20,
					'postfix' => 'px',
					'classes' => 'cols_2',
					'group' => __( 'Sizes', 'us' ),
				),
				'size_mobiles' => array(
					'title' => __( 'Font Size on Mobiles', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'std' => 20,
					'postfix' => 'px',
					'classes' => 'cols_2',
					'group' => __( 'Sizes', 'us' ),
				),
				'design_options' => array(
					'type' => 'design_options',
					'std' => '',
					'group' => __( 'More Options', 'us' ),
				),
			),
			'place_if' => class_exists( 'woocommerce' ),
		),
		'hwrapper' => array(
			'title' => __( 'Horizontal Wrapper', 'us' ),
			'params' => array(
				'alignment' => array(
					'title' => __( 'Elements Alignment', 'us' ),
					'type' => 'radio',
					'options' => array(
						'left' => us_translate( 'Left' ),
						'center' => us_translate( 'Center' ),
						'right' => us_translate( 'Right' ),
					),
					'std' => 'left',
				),
				'design_options' => array(
					'type' => 'design_options',
					'std' => '',
					'group' => __( 'More Options', 'us' ),
				),
			),
		),
		'vwrapper' => array(
			'title' => __( 'Vertical Wrapper', 'us' ),
			'params' => array(
				'alignment' => array(
					'title' => __( 'Elements Alignment', 'us' ),
					'type' => 'radio',
					'options' => array(
						'left' => us_translate( 'Left' ),
						'center' => us_translate( 'Center' ),
						'right' => us_translate( 'Right' ),
					),
					'std' => 'left',
				),
				'design_options' => array(
					'type' => 'design_options',
					'std' => '',
					'group' => __( 'More Options', 'us' ),
				),
			),
		),
	),

);
