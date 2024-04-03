<?php
/**
 * Theme customizer options
 *
 * @package Yuki Reverie Blog
 */

if ( ! function_exists( 'yuki_reverie_blog_return_yes' ) ) {
	function yuki_reverie_blog_return_yes() {
		return 'yes';
	}
}

if ( ! function_exists( 'yuki_reverie_blog_return_no' ) ) {
	function yuki_reverie_blog_return_no() {
		return 'no';
	}
}

if ( ! function_exists( 'yuki_reverie_blog_base_100_background' ) ) {
	function yuki_reverie_blog_base_100_background() {
		return [
			'type'  => 'color',
			'color' => 'var(--yuki-base-100)',
		];
	}
}

if ( ! function_exists( 'yuki_reverie_blog_base_color_background' ) ) {
	function yuki_reverie_blog_base_color_background() {
		return [
			'type'  => 'color',
			'color' => 'var(--yuki-base-color)',
		];
	}
}

if ( ! function_exists( 'yuki_reverie_blog_border_none' ) ) {
	function yuki_reverie_blog_border_none() {
		return [
			'style'   => 'none',
			'width'   => 1,
			'color'   => 'var(--yuki-base-300)',
			'hover'   => '',
			'inherit' => false,
		];
	}
}
//
// Header & footer background
//
add_filter( 'yuki_header_top_bar_row_background_default_value', 'yuki_reverie_blog_base_color_background' );
add_filter( 'yuki_header_primary_navbar_row_background_default_value', 'yuki_reverie_blog_base_100_background' );
add_filter( 'yuki_header_bottom_row_row_background_default_value', 'yuki_reverie_blog_base_color_background' );

add_filter( 'yuki_footer_top_row_background_default_value', 'yuki_reverie_blog_base_color_background' );
add_filter( 'yuki_footer_middle_row_background_default_value', 'yuki_reverie_blog_base_color_background' );
add_filter( 'yuki_footer_bottom_row_background_default_value', 'yuki_reverie_blog_base_color_background' );

//
// Header top row
//
if ( ! function_exists( 'yuki_reverie_blog_header_top_row_elements' ) ) {
	function yuki_reverie_blog_header_top_row_elements() {
		return [
			'desktop' => [
				[
					'elements' => [],
					'settings' => [ 'width' => '33.33%' ]
				],
				[
					'elements' => [],
					'settings' => [ 'width' => '33.33%' ]
				],
				[
					'elements' => [],
					'settings' => [ 'width' => '33.33%' ]
				],
			],
			'mobile'  => [
				[
					'elements' => [],
					'settings' => [ 'width' => '100%', 'justify-content' => 'center' ]
				],
			],
		];
	}
}
add_filter( 'yuki_header_top_row_default_value', 'yuki_reverie_blog_header_top_row_elements' );

if ( ! function_exists( 'yuki_reverie_blog_header_top_row_height' ) ) {
	function yuki_reverie_blog_header_top_row_height() {
		return '40px';
	}
}
add_filter( 'yuki_header_top_bar_row_min_height_default_value', 'yuki_reverie_blog_header_top_row_height' );


//
// Header middle row
//

if ( ! function_exists( 'yuki_reverie_blog_header_primary_row_elements' ) ) {
	function yuki_reverie_blog_header_primary_row_elements() {
		return [
			'desktop' => [
				[
					'elements' => [ 'socials' ],
					'settings' => [ 'width' => '30%' ]
				],
				[
					'elements' => [ 'logo' ],
					'settings' => [ 'width' => '40%', 'justify-content' => 'center' ]
				],
				[
					'elements' => [ 'theme-switch', 'search', 'button-1' ],
					'settings' => [ 'width' => '30%', 'justify-content' => 'flex-end', 'elements-gap' => '16px' ]
				],
			],
			'mobile'  => [
				[
					'elements' => [ 'logo' ],
					'settings' => [ 'width' => '100%', 'justify-content' => 'center' ]
				],
			],
		];
	}
}
add_filter( 'yuki_header_primary_row_default_value', 'yuki_reverie_blog_header_primary_row_elements' );

if ( ! function_exists( 'yuki_reverie_blog_primary_navbar_row_height' ) ) {
	function yuki_reverie_blog_primary_navbar_row_height() {
		return '160px';
	}
}
add_filter( 'yuki_header_primary_navbar_row_min_height_default_value', 'yuki_reverie_blog_primary_navbar_row_height' );

if ( ! function_exists( 'yuki_reverie_blog_primary_navbar_row_border_bottom' ) ) {
	function yuki_reverie_blog_primary_navbar_row_border_bottom() {
		return [
			'style'   => 'none',
			'width'   => 1,
			'color'   => 'var(--yuki-base-200)',
			'hover'   => '',
			'inherit' => false,
		];
	}
}
add_filter( 'yuki_header_primary_navbar_row_border_bottom_default_value', 'yuki_reverie_blog_primary_navbar_row_border_bottom' );


//
// Header bottom row
//
if ( ! function_exists( 'yuki_reverie_blog_header_bottom_row_elements' ) ) {
	function yuki_reverie_blog_header_bottom_row_elements() {
		return [
			'desktop' => [
				[
					'elements' => [ 'menu-1' ],
					'settings' => [ 'width' => '100%', 'justify-content' => 'center' ]
				],
			],
			'mobile'  => [
				[
					'elements' => [ 'trigger' ],
					'settings' => [ 'width' => '20%', 'justify-content' => 'flex-start', 'elements-gap' => '16px' ]
				],
				[
					'elements' => [ 'socials' ],
					'settings' => [ 'width' => '60%', 'justify-content' => 'center', 'elements-gap' => '16px' ]
				],
				[
					'elements' => [ 'theme-switch', 'search' ],
					'settings' => [ 'width' => '20%', 'justify-content' => 'flex-end', 'elements-gap' => '16px' ]
				],
			],
		];
	}
}
add_filter( 'yuki_header_bottom_row_default_value', 'yuki_reverie_blog_header_bottom_row_elements' );

if ( ! function_exists( 'yuki_reverie_blog_bottom_row_height' ) ) {
	function yuki_reverie_blog_bottom_row_height() {
		return '60px';
	}
}
add_filter( 'yuki_header_bottom_row_row_min_height_default_value', 'yuki_reverie_blog_bottom_row_height' );

if ( ! function_exists( 'yuki_reverie_blog_bottom_row_border_top' ) ) {
	function yuki_reverie_blog_bottom_row_border_top() {
		return [
			'style'   => 'solid',
			'width'   => 1,
			'color'   => 'var(--yuki-base-300)',
			'hover'   => '',
			'inherit' => false,
		];
	}
}
add_filter( 'yuki_header_bottom_row_row_border_top_default_value', 'yuki_reverie_blog_bottom_row_border_top' );

if ( ! function_exists( 'yuki_reverie_blog_bottom_row_border_bottom' ) ) {
	function yuki_reverie_blog_bottom_row_border_bottom() {
		return [
			'style'   => 'solid',
			'width'   => 1,
			'color'   => 'var(--yuki-base-300)',
			'hover'   => '',
			'inherit' => false,
		];
	}
}
add_filter( 'yuki_header_bottom_row_row_border_bottom_default_value', 'yuki_reverie_blog_bottom_row_border_bottom' );

//
// Canvas area
//
if ( ! function_exists( 'yuki_reverie_blog_canvas_drawer_placement' ) ) {
	function yuki_reverie_blog_canvas_drawer_placement() {
		return 'left';
	}
}
add_filter( 'yuki_canvas_drawer_placement_default_value', 'yuki_reverie_blog_canvas_drawer_placement' );

// icon size
if ( ! function_exists( 'yuki_reverie_blog_icon_size' ) ) {
	function yuki_reverie_blog_icon_size() {
		return '20px';
	}
}
add_filter( 'yuki_header_el_socials_icons_size_default_value', 'yuki_reverie_blog_icon_size' );
add_filter( 'yuki_header_el_search_icon_button_size_default_value', 'yuki_reverie_blog_icon_size' );
add_filter( 'yuki_header_el_trigger_icon_button_size_default_value', 'yuki_reverie_blog_icon_size' );
add_filter( 'yuki_header_el_theme_switch_icon_button_size_default_value', 'yuki_reverie_blog_icon_size' );
add_filter( 'yuki_header_el_cart_icon_button_size_default_value', 'yuki_reverie_blog_icon_size' );

//
// Header menu element
//
if ( ! function_exists( 'yuki_reverie_blog_header_menu_typography' ) ) {
	function yuki_reverie_blog_header_menu_typography() {
		return [
			'family'        => 'inherit',
			'fontSize'      => '0.8rem',
			'variant'       => '600',
			'lineHeight'    => '1',
			'textTransform' => 'uppercase',
		];
	}
}
add_filter( 'yuki_header_el_menu_2_top_level_typography_default_value', 'yuki_reverie_blog_header_menu_typography' );
add_filter( 'yuki_header_el_menu_1_top_level_typography_default_value', 'yuki_reverie_blog_header_menu_typography' );

if ( ! function_exists( 'yuki_reverie_blog_header_menu_dropdown_typography' ) ) {
	function yuki_reverie_blog_header_menu_dropdown_typography() {
		return [
			'family'     => 'inherit',
			'fontSize'   => '1rem',
			'variant'    => '500',
			'lineHeight' => '1',
		];
	}
}
add_filter( 'yuki_header_el_menu_1_dropdown_typography_default_value', 'yuki_reverie_blog_header_menu_dropdown_typography' );

//
// Header socials element
//
if ( ! function_exists( 'yuki_reverie_blog_socials_icons_color_type' ) ) {
	function yuki_reverie_blog_socials_icons_color_type() {
		return 'custom';
	}
}
add_filter( 'yuki_header_el_socials_icons_color_type_default_value', 'yuki_reverie_blog_socials_icons_color_type' );

//
// Header button element
//
if ( ! function_exists( 'yuki_reverie_blog_header_button_label' ) ) {
	function yuki_reverie_blog_header_button_label() {
		return __( 'Subscribe', 'yuki-reverie-blog' );
	}
}
add_filter( 'yuki_header_el_button_1_label_default_value', 'yuki_reverie_blog_header_button_label' );

if ( ! function_exists( 'yuki_reverie_blog_button_radius' ) ) {
	function yuki_reverie_blog_button_radius() {
		return [
			'linked' => true,
			'left'   => '999px',
			'right'  => '999px',
			'top'    => '999px',
			'bottom' => '999px',
		];
	}
}
add_filter( 'yuki_header_el_button_1_radius_default_value', 'yuki_reverie_blog_button_radius' );
add_filter( 'yuki_header_el_button_2_radius_default_value', 'yuki_reverie_blog_button_radius' );
add_filter( 'yuki_header_el_button_3_radius_default_value', 'yuki_reverie_blog_button_radius' );
add_filter( 'yuki_header_el_button_4_radius_default_value', 'yuki_reverie_blog_button_radius' );
add_filter( 'yuki_entry_read_more_radius_default_value', 'yuki_reverie_blog_button_radius' );
add_filter( 'yuki_content_buttons_radius_default_value', 'yuki_reverie_blog_button_radius' );
add_filter( 'yuki_related_posts_read_more_radius_default_value', 'yuki_reverie_blog_button_radius' );

//
// Header logo element
//

add_filter( 'yuki_header_el_logo_enable_site_tagline_default_value', 'yuki_reverie_blog_return_yes' );

if ( ! function_exists( 'yuki_reverie_blog_header_el_logo_content_alignment' ) ) {
	function yuki_reverie_blog_header_el_logo_content_alignment() {
		return 'center';
	}
}
add_filter( 'yuki_header_el_logo_content_alignment_default_value', 'yuki_reverie_blog_header_el_logo_content_alignment' );

if ( ! function_exists( 'yuki_reverie_blog_header_el_logo_position' ) ) {
	function yuki_reverie_blog_header_el_logo_position() {
		return 'top';
	}
}
add_filter( 'yuki_header_el_logo_position_default_value', 'yuki_reverie_blog_header_el_logo_position' );

if ( ! function_exists( 'yuki_reverie_blog_header_el_logo_site_title_typography' ) ) {
	function yuki_reverie_blog_header_el_logo_site_title_typography() {
		return [
			'family'        => 'inherit',
			'fontSize'      => '32px',
			'variant'       => '600',
			'lineHeight'    => '1.7',
			'textTransform' => 'uppercase',
		];
	}
}
add_filter( 'yuki_header_el_logo_site_title_typography_default_value', 'yuki_reverie_blog_header_el_logo_site_title_typography' );

if ( ! function_exists( 'yuki_reverie_blog_header_el_logo_site_tagline_typography' ) ) {
	function yuki_reverie_blog_header_el_logo_site_tagline_typography() {
		return [
			'family'     => 'inherit',
			'fontSize'   => '15px',
			'variant'    => '500',
			'lineHeight' => '1.5',
		];
	}
}
add_filter( 'yuki_header_el_logo_site_tagline_typography_default_value', 'yuki_reverie_blog_header_el_logo_site_tagline_typography' );

//
// Header particles
//

add_filter( 'yuki_header_primary_navbar_row_enable_particles_default_value', 'yuki_reverie_blog_return_yes' );

if ( ! function_exists( 'yuki_reverie_blog_primary_navbar_particles_preset' ) ) {
	function yuki_reverie_blog_primary_navbar_particles_preset() {
		return 'fire-spark';
	}
}
add_filter( 'yuki_header_primary_navbar_row_particle_preset_default_value', 'yuki_reverie_blog_primary_navbar_particles_preset' );

//
// Archive Layout
//
if ( ! function_exists( 'yuki_reverie_blog_archive_layout' ) ) {
	function yuki_reverie_blog_archive_layout() {
		return 'archive-grid';
	}
}
add_filter( 'yuki_archive_layout_default_value', 'yuki_reverie_blog_archive_layout' );

if ( ! function_exists( 'yuki_reverie_blog_archive_card_gap' ) ) {
	function yuki_reverie_blog_archive_card_gap() {
		return '48px';
	}
}
add_filter( 'yuki_card_gap_default_value', 'yuki_reverie_blog_archive_card_gap' );

if ( ! function_exists( 'yuki_reverie_blog_archive_entry_tax_style' ) ) {
	function yuki_reverie_blog_archive_entry_tax_style() {
		return 'badge';
	}
}
add_filter( 'yuki_entry_tax_style_cats_default_value', 'yuki_reverie_blog_archive_entry_tax_style' );

if ( ! function_exists( 'yuki_reverie_blog_archive_entry_tax_badge_bg_color' ) ) {
	function yuki_reverie_blog_archive_entry_tax_badge_bg_color() {
		return [
			'initial' => 'var(--yuki-primary-color)',
			'hover'   => 'var(--yuki-primary-active)',
		];
	}
}
add_filter( 'yuki_entry_tax_badge_bg_color_cats_default_value', 'yuki_reverie_blog_archive_entry_tax_badge_bg_color' );

if ( ! function_exists( 'yuki_reverie_blog_archive_header_alignment' ) ) {
	function yuki_reverie_blog_archive_header_alignment() {
		return 'center';
	}
}
add_filter( 'yuki_archive_header_alignment_default_value', 'yuki_reverie_blog_archive_header_alignment' );

// Disable sidebar
add_filter( 'yuki_archive_sidebar_section_default_value', 'yuki_reverie_blog_return_no' );
if ( ! function_exists( 'yuki_reverie_blog_pagination_alignment' ) ) {
	function yuki_reverie_blog_pagination_alignment() {
		return 'center';
	}
}
add_filter( 'yuki_pagination_alignment_default_value', 'yuki_reverie_blog_pagination_alignment' );

if ( ! function_exists( 'yuki_reverie_blog_excerpt_length' ) ) {
	function yuki_reverie_blog_excerpt_length() {
		return 6;
	}
}
add_filter( 'yuki_entry_excerpt_length_default_value', 'yuki_reverie_blog_excerpt_length' );

if ( ! function_exists( 'yuki_reverie_blog_archive_image_width' ) ) {
	function yuki_reverie_blog_archive_image_width() {
		return [
			'desktop' => '35%',
			'tablet'  => '35%',
			'mobile'  => '100%',
		];
	}
}
add_filter( 'yuki_archive_image_width_default_value', 'yuki_reverie_blog_archive_image_width' );

//
// Colors
//

if ( ! function_exists( 'yuki_reverie_blog_light_color_scheme' ) ) {
	/**
	 * Add light theme color scheme
	 *
	 * @param $palettes
	 *
	 * @return mixed
	 */
	function yuki_reverie_blog_light_color_scheme( $palettes ) {
		return [
			[
				'yuki-light-primary-color'  => '#d74a49',
				'yuki-light-primary-active' => '#d74a49',
				'yuki-light-accent-color'   => '#222940',
				'yuki-light-accent-active'  => '#222940',
				'yuki-light-base-300'       => '#222940',
				'yuki-light-base-200'       => '#222940',
				'yuki-light-base-100'       => '#e3e7ee',
				'yuki-light-base-color'     => '#ffffff',
			],
			[
				'yuki-light-primary-color'  => '#f32d71',
				'yuki-light-primary-active' => '#f32d71',
				'yuki-light-accent-color'   => '#261e40',
				'yuki-light-accent-active'  => '#261e40',
				'yuki-light-base-300'       => '#261e40',
				'yuki-light-base-200'       => '#242835',
				'yuki-light-base-100'       => '#e9ecf7',
				'yuki-light-base-color'     => '#ffffff',
			],
			[
				'yuki-light-primary-color'  => '#1b7865',
				'yuki-light-primary-active' => '#1b7865',
				'yuki-light-accent-color'   => '#00202e',
				'yuki-light-accent-active'  => '#00202e',
				'yuki-light-base-300'       => '#074337',
				'yuki-light-base-200'       => '#074337',
				'yuki-light-base-100'       => '#faf7ef',
				'yuki-light-base-color'     => '#ffffff',
			],
			[
				'yuki-light-primary-color'  => '#fb6f92',
				'yuki-light-primary-active' => '#fb6f92',
				'yuki-light-accent-color'   => '#00202e',
				'yuki-light-accent-active'  => '#00202e',
				'yuki-light-base-300'       => '#ff8fab',
				'yuki-light-base-200'       => '#ff8fab',
				'yuki-light-base-100'       => '#fff9fa',
				'yuki-light-base-color'     => '#ffffff',
			],
			[
				'yuki-light-primary-color'  => '#46399c',
				'yuki-light-primary-active' => '#46399c',
				'yuki-light-accent-color'   => '#183e4b',
				'yuki-light-accent-active'  => '#183e4b',
				'yuki-light-base-300'       => '#183e4b',
				'yuki-light-base-200'       => '#183e4b',
				'yuki-light-base-100'       => '#eaeaea',
				'yuki-light-base-color'     => '#ffffff',
			],
			[
				'yuki-light-primary-color'  => '#fca311',
				'yuki-light-primary-active' => '#ffc300',
				'yuki-light-accent-color'   => '#000000',
				'yuki-light-accent-active'  => '#000000',
				'yuki-light-base-300'       => '#000000',
				'yuki-light-base-200'       => '#000000',
				'yuki-light-base-100'       => '#ffffff',
				'yuki-light-base-color'     => '#ffffff',
			],
		];
	}
}
add_filter( 'yuki_light_color_palettes', 'yuki_reverie_blog_light_color_scheme' );

if ( ! function_exists( 'yuki_reverie_blog_dark_color_scheme' ) ) {
	/**
	 * Add dark theme color scheme
	 *
	 * @param $palettes
	 *
	 * @return mixed
	 */
	function yuki_reverie_blog_dark_color_scheme( $palettes ) {
		return [
			[
				'yuki-dark-primary-color'  => '#d74a49',
				'yuki-dark-primary-active' => '#d74a49',
				'yuki-dark-accent-color'   => '#ffffff',
				'yuki-dark-accent-active'  => '#ffffff',
				'yuki-dark-base-300'       => '#61666e',
				'yuki-dark-base-200'       => '#ffffff',
				'yuki-dark-base-100'       => '#242a34',
				'yuki-dark-base-color'     => '#11151c',
			],
			[
				'yuki-dark-primary-color'  => '#f32d71',
				'yuki-dark-primary-active' => '#f32d71',
				'yuki-dark-accent-color'   => '#ffffff',
				'yuki-dark-accent-active'  => '#ffffff',
				'yuki-dark-base-300'       => '#59596e',
				'yuki-dark-base-200'       => '#ffffff',
				'yuki-dark-base-100'       => '#191929',
				'yuki-dark-base-color'     => '#000000',
			],
			[
				'yuki-dark-primary-color'  => '#1b7865',
				'yuki-dark-primary-active' => '#1b7865',
				'yuki-dark-accent-color'   => '#ffffff',
				'yuki-dark-accent-active'  => '#ffffff',
				'yuki-dark-base-300'       => '#6c6a66',
				'yuki-dark-base-200'       => '#faf7ef',
				'yuki-dark-base-100'       => '#242424',
				'yuki-dark-base-color'     => '#000000',
			],
			[
				'yuki-dark-primary-color'  => '#fb6f92',
				'yuki-dark-primary-active' => '#fb6f92',
				'yuki-dark-accent-color'   => '#ffffff',
				'yuki-dark-accent-active'  => '#ffffff',
				'yuki-dark-base-300'       => '#736d6f',
				'yuki-dark-base-200'       => '#ffffff',
				'yuki-dark-base-100'       => '#201d1e',
				'yuki-dark-base-color'     => '#000000',
			],
			[
				'yuki-dark-primary-color'  => '#5948c6',
				'yuki-dark-primary-active' => '#5948c6',
				'yuki-dark-accent-color'   => '#eaeaea',
				'yuki-dark-accent-active'  => '#eaeaea',
				'yuki-dark-base-300'       => '#5f5f6a',
				'yuki-dark-base-200'       => '#eaeaea',
				'yuki-dark-base-100'       => '#141424',
				'yuki-dark-base-color'     => '#000000',
			],
			[
				'yuki-dark-primary-color'  => '#fca311',
				'yuki-dark-primary-active' => '#ffc300',
				'yuki-dark-accent-color'   => '#ffffff',
				'yuki-dark-accent-active'  => '#ffffff',
				'yuki-dark-base-300'       => '#ffffff',
				'yuki-dark-base-200'       => '#ffffff',
				'yuki-dark-base-100'       => '#000000',
				'yuki-dark-base-color'     => '#000000',
			],
		];
	}
}
add_filter( 'yuki_dark_color_palettes', 'yuki_reverie_blog_dark_color_scheme' );

//
// Card style
//
add_filter( 'yuki_card_background_default_value', 'yuki_reverie_blog_base_color_background' );
add_filter( 'yuki_global_sidebar_widgets-background_default_value', 'yuki_reverie_blog_base_color_background' );

if ( ! function_exists( 'yuki_reverie_blog_card_border' ) ) {
	function yuki_reverie_blog_card_border() {
		return [
			'style'   => 'solid',
			'width'   => 2,
			'color'   => 'var(--yuki-base-200)',
			'hover'   => '',
			'inherit' => false,
		];
	}
}
add_filter( 'yuki_card_border_default_value', 'yuki_reverie_blog_card_border' );
add_filter( 'yuki_global_sidebar_widgets-border_default_value', 'yuki_reverie_blog_card_border' );

if ( ! function_exists( 'yuki_reverie_blog_card_shadow' ) ) {
	function yuki_reverie_blog_card_shadow() {
		return [
			'enable'     => 'yes',
			'horizontal' => '10px',
			'vertical'   => '10px',
			'blur'       => '0px',
			'spread'     => '0px',
			'color'      => 'var(--yuki-base-200)',
		];
	}
}
add_filter( 'yuki_card_shadow_default_value', 'yuki_reverie_blog_card_shadow' );
add_filter( 'yuki_global_sidebar_widgets-shadow_default_value', 'yuki_reverie_blog_card_shadow' );

//
// Preloader
//
if ( ! function_exists( 'yuki_reverie_blog_preloader_colors' ) ) {
	function yuki_reverie_blog_preloader_colors() {
		return [
			'background' => 'var(--yuki-base-color)',
			'accent'     => 'var(--yuki-accent-color)',
			'primary'    => 'var(--yuki-primary-color)',
		];
	}
}
add_filter( 'yuki_preloader_colors_default_value', 'yuki_reverie_blog_preloader_colors' );

//
// Preloader preset
//
if ( ! function_exists( 'yuki_reverie_blog_preloader_preset' ) ) {
	function yuki_reverie_blog_preloader_preset() {
		return 'preset-4';
	}
}
add_filter( 'yuki_preloader_preset_default_value', 'yuki_reverie_blog_preloader_preset' );

//
// Featured image
//
if ( ! function_exists( 'yuki_reverie_blog_featured_image_position' ) ) {
	function yuki_reverie_blog_featured_image_position() {
		return 'below';
	}
}
add_filter( 'yuki_post_featured_image_position_default_value', 'yuki_reverie_blog_featured_image_position' );
add_filter( 'yuki_page_featured_image_position_default_value', 'yuki_reverie_blog_featured_image_position' );

if ( ! function_exists( 'yuki_reverie_blog_content_spacing' ) ) {
	/**
	 * Change default content spacing for homepage and archive
	 *
	 * @return string
	 */
	function yuki_reverie_blog_content_spacing() {
		return '48px';
	}
}
add_filter( 'yuki_homepage_content_spacing_default_value', 'yuki_reverie_blog_content_spacing' );
add_filter( 'yuki_archive_content_spacing_default_value', 'yuki_reverie_blog_content_spacing' );

//
// Sticky header
//
add_filter( 'yuki_sticky_header_default_value', 'yuki_reverie_blog_return_yes' );

if ( ! function_exists( 'yuki_reverie_blog_sticky_rows' ) ) {
	function yuki_reverie_blog_sticky_rows() {
		return 'bottom-row';
	}
}
add_filter( 'yuki_sticky_header_rows_default_value', 'yuki_reverie_blog_sticky_rows' );
