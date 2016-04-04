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
