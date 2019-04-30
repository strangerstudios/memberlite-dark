<?php
/**
 * Memberlite Dark functions and definitions
 *
 * @package Memberlite 4.0
 * @subpackage Memberlite Dark 1.0
 */
define( 'MEMBERLITE_DARK_VERSION', '1.0' );
 
// Enqueue scripts and styles.
function memberlite_dark_child_enqueue_styles() {
    wp_enqueue_style( 'memberlite', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'memberlite_darkcss', get_template_directory_uri() . '/css/dark.css', array(), MEMBERLITE_VERSION );
	wp_enqueue_script( 'memberlite-dark-script', get_stylesheet_directory_uri() . '/script.js', array( 'jquery' ), MEMBERLITE_DARK_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'memberlite_dark_child_enqueue_styles' );

// Child theme inherits parent theme settings - based on code by @greenshady from https://core.trac.wordpress.org/ticket/27177#comment:14
function memberlite_dark_child_switch_theme_update_mods() {
	if ( is_child_theme() && false === get_theme_mods() ) {
		$mods = get_option( 'theme_mods_' . get_option( 'template' ) );
		if ( false !== $mods ) {
			foreach ( (array) $mods as $mod => $value ) {
				if ( 'sidebars_widgets' !== $mod )
					set_theme_mod( $mod, $value );
			}
		}
	}
}
add_action( 'switch_theme', 'memberlite_dark_child_switch_theme_update_mods' );

// Filter - Add color schemes
function memberlite_dark_color_schemes() {
	$dark_schemes = array(
		'default' => array(
			'label'  => __( 'Default', 'memberlite' ),
			'colors' => array(
				'#888888', // header text color
				'#0F0F0F', // background color
				'#0F0F0F', // primary navigation background color
				'#FFFEDF', // primary navigation link color
				'#DDDDDD', // link color
				'#444444', // meta link color
				'#888888', // primary color
				'#1F1F1F', // secondary color
				'#AAAAAA', // action color
			),
		),
		'bad_avocado' => array(
			'label'  => __( 'Bad Avocado', 'memberlite' ),
			'colors' => array(
				'#c8cc49', // header text color
				'#121212', // background color
				'#121212', // primary navigation background color
				'#FFFFFF', // primary navigation link color
				'#86892e', // link color
				'#414141', // meta link color
				'#86892e', // primary color
				'#212121', // secondary color
				'#c8cc49', // action color
			),
		),
		'blood_orange' => array(
			'label'  => __( 'Blood Orange', 'memberlite' ),
			'colors' => array(
				'#D3001D', // header text color
				'#121212', // background color
				'#121212', // primary navigation background color
				'#f9f9f9', // primary navigation link color
				'#FC621A', // link color
				'#313131', // meta link color
				'#FC621A', // primary color
				'#313131', // secondary color
				'#D3001D', // action color
			),
		),
		'city_lights' => array(
			'label'  => __( 'City Lights', 'memberlite' ),
			'colors' => array(
				'#0040E0', // header text color
				'#090909', // background color
				'#090909', // primary navigation background color
				'#FFFFFF', // primary navigation link color
				'#0040E0', // link color
				'#424242', // meta link color
				'#0040E0', // primary color
				'#40E300', // secondary color
				'#db2102', // action color
			),
		),
		'coffee_cups' => array(
			'label'  => __( 'Coffee Cups', 'memberlite' ),
			'colors' => array(
				'#DFBA69', // header text color
				'#2a2c31', // background color
				'#2a2c31', // primary navigation background color
				'#FFFEDF', // primary navigation link color
				'#DFBA69', // link color
				'#4e515b', // meta link color
				'#DFBA69', // primary color
				'#31333a', // secondary color
				'#5A2E2E', // action color
			),
		),
		'cotton_candy' => array(
			'label'  => __( 'Cotton Candy', 'memberlite' ),
			'colors' => array(
				'#ff3f72', // header text color
				'#121212', // background color
				'#121212', // primary navigation background color
				'#FFFFFF', // primary navigation link color
				'#ff3f72', // link color
				'#393939', // meta link color
				'#53bbf4', // primary color
				'#191919', // secondary color
				'#ff3f72', // action color
			),
		),
		'education' => array(
			'label'  => __( 'Education', 'memberlite' ),
			'colors' => array(
				'#354458',
				'#111111',
				'#111111',
				'#FFFFFF',
				'#354458',
				'#313131',
				'#354458',
				'#eb7260',
				'#3a9ad9',
			),
		),
		'modern_teal' => array(
			'label'  => __( 'Modern Teal', 'memberlite' ),
			'colors' => array(
				'#00ccd6',
				'#050505',
				'#050505',
				'#efefef',
				'#00ccd6',
				'#424242',
				'#00ccd6',
				'#424242',
				'#ffd900',
			),
		),
		'pink_punch' => array(
			'label'  => __( 'Pink Punch', 'memberlite' ),
			'colors' => array(
				'#FA023C', // header text color
				'#121212', // background color
				'#121212', // primary navigation background color
				'#f9f9f9', // primary navigation link color
				'#FA023C', // link color
				'#393939', // meta link color
				'#4B000F', // primary color
				'#191919', // secondary color
				'#FA023C', // action color
			),
		),
		'purple_dinosaur' => array(
			'label'  => __( 'Purple Dinosaur', 'memberlite' ),
			'colors' => array(
				'#87165e', // header text color
				'#191919', // background color
				'#191919', // primary navigation background color
				'#e2f7ce', // primary navigation link color
				'#87165e', // link color
				'#393939', // meta link color
				'#601848', // primary color
				'#292929', // secondary color
				'#87165e', // action color
			),
		),
		'skin_deep' => array(
			'label'  => __( 'Skin Deep', 'memberlite' ),
			'colors' => array(
				'#BA3030', // header text color
				'#121212', // background color
				'#121212', // primary navigation background color
				'#ebebeb', // primary navigation link color
				'#8e2020', // link color
				'#303030', // meta link color
				'#771717', // primary color
				'#303030', // secondary color
				'#8e2020', // action color
			),
		),
		'slate_blue' => array(
			'label'  => __( 'Slate Blue', 'memberlite' ),
			'colors' => array(
				'#526f87', // header text color
				'#121212', // background color
				'#121212', // primary navigation background color
				'#f9f9f9', // primary navigation link color
				'#526f87', // link color
				'#3d4e5c', // meta link color
				'#3d4e5c', // primary color
				'#191919', // secondary color
				'#526f87', // action color
			),
		),
	);
	return $dark_schemes;
}
add_filter( 'memberlite_color_schemes', 'memberlite_dark_color_schemes' );

/** Filter - back to top */

function memberlite_dark_childtheme_back_to_top() {
	$back_to_top = '';
	$back_to_top = '<i class="fa fa-chevron-up"></i>';

	return $back_to_top;
}
add_filter( 'memberlite_back_to_top', 'memberlite_dark_childtheme_back_to_top' );

/** Customizer options */
require_once get_stylesheet_directory() . '/inc/customizer.php';

/**
 * Memberlite Dark - child theme scripts 
 */
function memberlite_dark_childtheme_scripts() {
	if ( 'none' != get_theme_mod( 'memberlite_dark_background_texture' ) ) { ?>
		<!-- Textures -->
		<style type="text/css">
			/** Background Textures */
			.masthead,
			.banner_action,
			.footer-widgets {
				background-image: url(<?php echo get_stylesheet_directory_uri() . '/images/' . get_theme_mod( 'memberlite_dark_background_texture' ); ?>) !important;
				<?php if ( true === get_theme_mod( 'memberlite_dark_texture_parallax' ) ) { ?>
				background-attachment: fixed !important;
				<?php } ?>
			}
			/** Masthead for inner pages */
			.masthead-banner {
				background: <?php echo get_theme_mod( 'color_action' ); ?>;
				background-size: cover;
			}
		</style>
	<?php } ?>
<?php }
add_action( 'wp_head', 'memberlite_dark_childtheme_scripts' );
