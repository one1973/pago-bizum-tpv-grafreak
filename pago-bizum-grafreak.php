<?php
/**
 * Plugin Name:       Pago por Bizum
 * Plugin URI:        http://www.grafreak.net
 * Description:       Plugin que permite colocar una pasarela de pago en tu web
 * Version:           1.0.14
 * Author:            Grafreak
 * Author URI:        http://www.grafreak.net
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pago-bizum-grafreak
 * Domain Path:       /languages
 */

if (! defined('ABSPATH') ) {
    exit; // Exit if accessed directly.
}

// If this file is called directly, abort.
if (! defined('WPINC') ) {
    die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-pago-bizum-grafreak-activator.php
 */
function activate_pago_bizum_grafreak()
{
    include_once plugin_dir_path(__FILE__) . 'includes/class-pago-bizum-grafreak-activator.php';
    Pago_Bizum_Grafreak_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-pago-bizum-grafreak-deactivator.php
 */
function deactivate_pago_bizum_grafreak()
{
    include_once plugin_dir_path(__FILE__) . 'includes/class-pago-bizum-grafreak-deactivator.php';
    Pago_Bizum_Grafreak_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_pago_bizum_grafreak');
register_deactivation_hook(__FILE__, 'deactivate_pago_bizum_grafreak');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-pago-bizum-grafreak.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since 1.0.0
 */
function run_pago_bizum_grafreak()
{

    $plugin = new Pago_Bizum_Grafreak();
    $plugin->run();

}
run_pago_bizum_grafreak();
