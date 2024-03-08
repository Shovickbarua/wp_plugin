<?php
//check if file is access directly
if(!defined('WPINC')){
    exit("Do not access this file directly");
}

/**
 * BiggiDroid Gallery
 */
class BIGGIDROID_GALLERY
{
    public function init(){
        //add action init
        add_action( 'init', array($this, 'registerPostType') );
        //add meta box
        add_action('add_meta_boxs', array($this, 'addMetaBox'));
    }

    /**
     * Add meta box
     */
    public function addMetaBox(){
        add_meta_box(
            'biggidroid_gallery_meta_box',
            'Add Images',
            array($this, 'renderMetaBox'),
            'biggidroid_gallery',
            'normal',
            'high'
        );
    }

    /**
     * Render Meta box
     */

     public function renderMetaBox($post){
        ob_start();
        include_once BIGGIDROID_GALLERY_FILE_DIR . '/templates/add_images.php';
        $output = ob_get_clean();
        echo $output;
        // echo "Hello World";
     }

    /**
     * Register Post Type
     */
    public function registerPostType()
    {
        //$labels
        $labels = [
            'name' => "Gallery",
            'singular_name' => "Gallery",
            'menu_name' => "Gallery",
            'name_admin_bar' => "Galley",
            'add_new' => "Add New",
            'add_new_item' => "Add New BiggiDroid Galley",
            'new_item' => "New BiggiDroid Galley",
            'edit_item' => "Edit BiggiDroid Galley",
            'view_item' => "View BiggiDroid Galley",
            'all_items' => "All BiggiDroid Galley",
            'search_items' => "Search BiggiDroid Galley",
            'parent_item_colon' => "Parent BiggiDroid Galley",
            'not_found' => "No BiggiDroid Galley found",
            'not_found_in_trash' => "No BiggiDroid Galley found in Trash",
        ];
        $args =[
            'label' => "BiggiDroid Gallery",
            'labels' => $labels,
            'description' => "BiggiDroid Gallery for Wordpress",
            'show_ui' => true,
            'supports' => ['title']
        ];

    //register
    register_post_type('biggidroid_gallery', $args);
    }

}

//init
$init = new BIGGIDROID_GALLERY();
$init->init();