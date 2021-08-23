<?php
/**
 * Plugin Name:       Talash
 * Plugin URI:        https://wordpress.org/plugins/talash
 * Description:       Advanced Search plugin for WordPress. <code>[talash-search]</code> use this shorCode to show the <strong>Searchify Search Bar</strong>. You can customize the UI from customizer.
 * Version:           0.0.7
 * Author:            Keramot Ul Islam 
 * Author URI:        https://abmsourav.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt 
 * Text Domain:       talash
 * Domain Path:       /languages
 */
use Talash\Talash_Class;

if ( ! defined( 'ABSPATH' ) ) die;

define( 'TALASH_VERSION', '0.0.7' );
define( 'TALASH_URL', plugins_url( '/', __FILE__ ) );
define( 'TALASH_DIR_PATH', plugin_dir_path( __FILE__ ) );
define( 'TALASH_ENV_DEV', false );


require TALASH_DIR_PATH . '/inc/Searchify.php';

Talash_Class::spread_happiness();