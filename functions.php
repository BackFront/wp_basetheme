<?php

/**
 * @author Douglas Alves <alves.douglaz@gmail.com>
 * @package github.com/BackFront/wp_basetheme
 * @version 0.0.0
 * 
 */
/* ================================
 * Constants =================== */
define('UMB_VERSION', '0.0.0');
define('UMB_MODULE_PATH', '/modules');
define('UMB_VIEWS_PATH', '/view');
define('UMB_AUTOLOAD', '/vendor/autoload.php');

define('UMB_TEMPLATE_PATH', get_template_directory());
define('UMB_TEMPLATE_URI', get_template_directory_uri());


/* ================================
 * Includes/Requires =========== */

//Autoload
require_once(UMB_TEMPLATE_PATH . UMB_AUTOLOAD);


/* ================================
 * Global Instances ============ */
$twigLoader = new Twig_Loader_Filesystem(UMB_TEMPLATE_PATH . UMB_VIEWS_PATH);
$twig = new Twig_Environment($twigLoader);


/* =======================================
 * Register Styles/Scripts ============ */
if (!function_exists('umb_register_styles')):

    function umb_register_styles() {
//wp_enqueue_script("bootstrap", UMB_TEMPLATE_PATH . '/assets/css/bootstrap.css');
    }

    add_action('wp_enqueue_scripts', 'umb_register_styles');

endif;

/* ================================
 * Theme Settings ============== */
if (!function_exists('umbella_theme_setup')) :

    function umbella_theme_setup() {

//Theme Supports
        add_theme_support('post-thumbnails');
        add_theme_support('post-formats', array('aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery'));
        add_theme_support('custom-background', apply_filters('twentyfourteen_custom_background_args', array('default-color' => 'f5f5f5')));

//Images Size
        add_image_size('twentyfourteen-full-width', 1038, 576, true);

//Thumbnail post size
////Reister the size to post thumbnail
        set_post_thumbnail_size(1024, 768, true);

//Nav menus
////Register the menus to all areas of to site
        register_nav_menus(array(
            'umb_nav_main' => 'Menu principal do site',
        ));
    }

    add_action('after_setup_theme', 'umbella_theme_setup');
endif; //Theme setup

/* =======================================
 * Custom Site Title ================== */
if (!function_exists('umb_custom_title')) :

    function umb_custom_title($title, $sep) {
        global $paged, $page;

        if (is_feed()) {
            return $title;
        }

        // Add the site name.
        $title .= get_bloginfo('name', 'display');

        // Add the site description for the home/front page.
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && ( is_home() || is_front_page() )) {
            $title = "$title $sep $site_description";
        }

        // Add a page number if necessary.
        if (( $paged >= 2 || $page >= 2 ) && !is_404()) {
            $title = "$title $sep " . sprintf(__('Page %s', 'twentyfourteen'), max($paged, $page));
        }

        return $title;
    }

    add_filter('wp_title', 'umb_custom_title', 10, 2);
endif;

/* =======================================
 * Menu itens ========================= */
if (!function_exists('umb_get_menu_itens')):

    function umb_get_menu_itens($menu_name) {
        if (( $locations = get_nav_menu_locations() ) && isset($locations[$menu_name])) {
            $menu = wp_get_nav_menu_object($locations[$menu_name]);
            $menu_itens = wp_get_nav_menu_items($menu->term_id);
            return get_current_item($menu_itens);
        }
    }

    function get_current_item($itens) {
        $menu_itens = [];
        foreach ($itens as $item) {
            $item_url = $item->url;
            $current_url = home_url($_SERVER['REQUEST_URI']);
            if ($item_url == $current_url){
                array_push($item->classes, 'active');
            }
            array_push($menu_itens, $item);
        }
        return $menu_itens;
    }


endif;