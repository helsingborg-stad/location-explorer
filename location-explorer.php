<?php

/**
 * Plugin Name:       Location Explorer
 * Plugin URI:        https://github.com/helsingborg-stad/location-explorer/
 * Description:       A nice handy function to decide where to live
 * Version:           1.0.0
 * Author:            Sebastian Thulin
 * Author URI:        https://github.com/sebastianthulin
 * License:           MIT
 * License URI:       https://opensource.org/licenses/MIT
 * Text Domain:       location-explorer
 * Domain Path:       /languages
 */

 // Protect agains direct file access
if (! defined('WPINC')) {
    die;
}

define('LOCATIONEXPLORER_PATH', plugin_dir_path(__FILE__));
define('LOCATIONEXPLORER_URL', plugins_url('', __FILE__));
define('LOCATIONEXPLORER_TEMPLATE_PATH', LOCATIONEXPLORER_PATH . 'templates/');

add_action('plugins_loaded', function () {
    var_dump(load_plugin_textdomain('location-explorer', false, plugin_basename(dirname(__FILE__)) . '/languages'));
});

require_once LOCATIONEXPLORER_PATH . 'source/php/Vendor/Psr4ClassLoader.php';
require_once LOCATIONEXPLORER_PATH . 'Public.php';

//Composer autoloader
if (file_exists(LOCATIONEXPLORER_PATH . 'vendor/autoload.php')) {
    require_once LOCATIONEXPLORER_PATH . 'vendor/autoload.php';
} else {
    die("This plugin is not complete: Run composer install to fetch required packages.");
}

// Instantiate and register the autoloader
$loader = new LocationExplorer\Vendor\Psr4ClassLoader();
$loader->addPrefix('LocationExplorer', LOCATIONEXPLORER_PATH);
$loader->addPrefix('LocationExplorer', LOCATIONEXPLORER_PATH . 'source/php/');
$loader->register();

// Acf auto import and export
add_action('plugins_loaded', function () {
    $acfExportManager = new \AcfExportManager\AcfExportManager();
    $acfExportManager->setTextdomain('location-explorer');
    $acfExportManager->setExportFolder(LOCATIONEXPLORER_PATH . 'source/php/AcfFields/');
    $acfExportManager->autoExport(array(
        'location-images'   => 'group_5a4ce43df2db2',
        'location-adress'   => 'group_5a4ce57435598',
        'location-links'    => 'group_5a4ce9b2a982c',
        'location-meta'     => 'group_5a4ceae3ea641'
    ));
    $acfExportManager->import();
});

// Start application
add_action('plugins_loaded', function () {
    new LocationExplorer\App();
});
