<?php
/**
 * Main function file
 * # Wojciech Zdziejowski - main programmer
 *
 * If you do not feel comfortable in modifying WP leave this file and the entire contents of the function alone.
 *
 * Version: 4.0.3
 * Lastmod: 18.01.2021
 **/

/**=============================
 * GLOBAL FILES
 *==============================
 */
define('THEME_URL', get_template_directory_uri() . '/');
define('THEME_DIRECTORY', get_template_directory() . '/');

require_once('settings.php');
require_once('engine/functions.php');
require_once('theme_inc/functions.php');

/**=============================
 * BRAND STYLE
 *==============================
 */
require_once('brand/brand.php');

/**=============================
 * ALL INCLUDES
 *==============================
 */
//main
require_once('theme_inc/functions/styles.php');
require_once('theme_inc/functions/scripts.php');
require_once('theme_inc/functions/images.php');
require_once('theme_inc/functions/url.php');
require_once('theme_inc/functions/coala_register_required_plugins.php');

//optional
require_once('theme_inc/functions/text.php');
require_once('theme_inc/functions/sidebars.php');
require_once('theme_inc/functions/theme-customize.php');
require_once('theme_inc/functions/navmenus.php');

// add on
require_once('theme_inc/functions/turn-off-gutenberg.php');
require_once('theme_inc/functions/turn-off-comments.php');
require_once('theme_inc/functions/breadcrumbs-navxt.php');
require_once('theme_inc/functions/woocommerce.php');
require_once('theme_inc/functions/wpml.php');
require_once('theme_inc/functions/custom-functions.php');
require_once('theme_inc/functions/buttons.php');
require_once('theme_inc/functions/icons.php');

// add_action('phpmailer_init', 'cf7_configure_smtp');
// function cf7_configure_smtp($phpmailer)
// {
//     $phpmailer->isSMTP();
//     $phpmailer->Host       = 'host';
//     $phpmailer->SMTPAuth   = true;
//     $phpmailer->Username   = 'username';
//     $phpmailer->Password   = 'password';

//     if (extension_loaded('openssl')) {
//         $phpmailer->Port = 465;
//         $phpmailer->SMTPSecure = 'ssl';
//     } elseif (function_exists('stream_socket_enable_crypto')) {
//         $phpmailer->Port = 587;
//         $phpmailer->SMTPSecure = 'tls';
//     }
// }
