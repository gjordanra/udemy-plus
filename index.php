<?php
/**
 * Plugin Name:       Udemy-Plus
 * Plugin URI:        https://gjordanrad.x10.bz/
 * Description:       Pluggin for adding blocks to a Theme.
 * Version:           1.0.0
 * Requires at least: 5.9
 * Requires PHP:      7.2
 * Author:            Gustavo Jordan
 * Author URI:        https://gjordanrad.x10.bz/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://gjordanrad.x10.bz/
 * Text Domain:       udemy-plus
 * Domain Path:       /languages
 */

if (!function_exists('add_action')) {
  echo 'looks like you did a bad turn, ha? ';
  exit;
 };

 //setup
define('UP_PLUGIN_DIRECTORY', plugin_dir_path(__FILE__));



 //includes
 $rootFiles = glob(UP_PLUGIN_DIRECTORY . 'includes/*.php');
 $subdirectoryFiles = glob(UP_PLUGIN_DIRECTORY . 'includes/**/*.php');
 $allFiles = array_merge($rootFiles, $subdirectoryFiles);

 foreach ($allFiles as $includefile) {
  include_once ($includefile);
 }

 //print_r($allFiles);
/*
include (UP_PLUGIN_DIRECTORY . 'includes/register-blocks.php');
include (UP_PLUGIN_DIRECTORY . 'includes/blocks/search-form.php');
include (UP_PLUGIN_DIRECTORY . 'includes/blocks/page-header.php');
*/

 //hooks
 add_action( 'init', 'up_register_blocks');