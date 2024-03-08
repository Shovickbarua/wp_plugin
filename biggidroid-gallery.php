<?php
/**
 * Plugin Name: BiggiDroid Gallery 
 * Plugin URI:  https://shovick.org
 * Author:      Shovick Barua
 * Author URI:  Plugin Author Link
 * Description: This plugin does wonders
 * Version:     1.0
 * License:     GPL-2.0+
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: prefix-plugin-name
*/

//check if file is access directly
if(!defined('WPINC')){
    exit("Do not access this file directly");
}

//define plugin constants
define("BIGGIDROID_GALLERY_VERSION", time());
//plugin file
define("BIGGIDROID_GALLERY_FILE",__FILE__);
//plugin directory
define("BIGGIDROID_GALLERY_FILE_DIR", dirname(BIGGIDROID_GALLERY_FILE));
// plugin url
define("BIGGIDROID_GALLERY_URL", plugins_url('', BIGGIDROID_GALLERY_FILE));

//check if class exists
if(!class_exists('BIGGIDROID_GALLERY')){
    //include the class file
    include_once BIGGIDROID_GALLERY_FILE_DIR . '/includes/class-biggidroid-gallery.php';
}