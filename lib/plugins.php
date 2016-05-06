<?php

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/lib/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'imaginaire_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function imaginaire_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$current_theme = wp_get_theme();
    /**
     * Load plugin data from plugins/plugins.json
     *
     */
    $plugins_data_file = get_template_directory() . '/plugins/plugins.json';
    if (file_exists($plugins_data_file)) {
        $plugins_data = file_get_contents($plugins_data_file);
        $plugins = json_decode($plugins_data,true);
        if ($plugins === null && json_last_error() !== JSON_ERROR_NONE) {
            $errormsg = json_last_error_msg();
             return add_action( 'admin_notices', function() use ( $plugins_data_file, $errormsg,  $current_theme) {
                $msg[] = '<div class="error"><p>';
                $msg[] = sprintf('<strong>%s</strong>: ',$current_theme->Name);
                $msg[] = sprintf('Failed to parse json string in <strong>"%s"</strong>, error: <strong>"%s"</strong>', $plugins_data_file , $errormsg);
                $msg[] = '</p></div>';
                echo implode( PHP_EOL, $msg );
            });
         }
    }

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
		'id'           => 'imaginaire',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
