<?php
/**
 * ekwa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ekwa
 */

 require_once get_template_directory() . '/plugin-manager/class-tgm-plugin-activation.php';

 require get_template_directory() . '/settings/plugin-update-checker/plugin-update-checker.php';
 use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

 $myUpdateChecker = PucFactory::buildUpdateChecker(
	 'https://github.com/user-name/repo-name/',
	 __FILE__,
	 'unique-plugin-or-theme-slug'
 );

 //Set the branch that contains the stable release.
 $myUpdateChecker->setBranch('stable-branch-name');

 //Optional: If you're using a private repository, specify the access token like this:
 $myUpdateChecker->setAuthentication('your-token-here');

if ( ! function_exists( 'ekwa_setup' ) ) :

	function ekwa_setup() {

		load_theme_textdomain( 'ekwa', get_template_directory() . '/languages' );


		add_theme_support( 'title-tag' );


		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'ekwa' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'ekwa_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'ekwa_setup' );



add_action( 'tgmpa_register', 'ekwa_register_required_plugins' );


function ekwa_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin bundled with a theme.
		array(
			'name'               => 'Advanced Custom Fields PRO', // The plugin name.
			'slug'               => 'advanced-custom-fields-pro', // The plugin slug (typically the folder name).
			'source'             => get_template_directory() . '/plugin-manager/plugins/advanced-custom-fields-pro.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),
		array(
			'name'               => 'Ekwa Videos Plugin', // The plugin name.
			'slug'               => 'ekwa-videos', // The plugin slug (typically the folder name).
			'source'             => get_template_directory() . '/plugin-manager/plugins/ekwa-videos.zip', // The plugin source.
			'required'           => false, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'Kirki Customizer Framework',
			'slug'      => 'kirki',
			'required'  => true,
			'force_activation'   => true,
		),
		array(
			'name'      => 'Yoast SEO',
			'slug'      => 'wordpress-seo',
			'required'  => true,
			'force_activation'   => true,
		),
		array(
			'name'      => 'WPS Hide Login',
			'slug'      => 'wps-hide-login',
			'required'  => true,
			'force_activation'   => true,
		),
		array(
			'name'      => 'Wordfence Security',
			'slug'      => 'wordfence',
			'required'  => true,
			'force_activation'   => true,
		),
		array(
			'name'      => 'Limit Login Attempts Reloaded',
			'slug'      => 'plugin=limit-login-attempts-reloaded',
			'required'  => false,
			'force_activation'   => true,
		),
		array(
			'name'      => 'Duplicator',
			'slug'      => 'duplicator',
			'required'  => false,
			'force_activation'   => true,
		),



	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'ekwa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.


	);

	tgmpa( $plugins, $config );
}




/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ekwa_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ekwa_content_width', 640 );
}
add_action( 'after_setup_theme', 'ekwa_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */


function ekwa_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ekwa' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ekwa' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );



}
add_action( 'widgets_init', 'ekwa_widgets_init' );







/**
 * Enqueue scripts and styles.
 */
function ekwa_scripts() {

    // Removing default style sheet

	//wp_enqueue_style( 'ekwa-style', get_stylesheet_uri() );

     // Remove Default navigation.js

	//wp_enqueue_script( 'ekwa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	//wp_enqueue_script( 'ekwa-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ekwa_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';

}


require get_template_directory() . '/settings/theme-functions.php';
require get_template_directory() . '/settings/customizer.php';
require get_template_directory() . '/settings/acf.php';

add_filter('acf/settings/save_json', 'ekwa_acf_json_save_point');

function ekwa_acf_json_save_point( $path ) {

    // update path
    $path = get_stylesheet_directory() . '/acf-json';
    // return
    return $path;
}



