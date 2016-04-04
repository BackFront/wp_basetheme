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
define('UMB_AUTOLOAD', '/vendor/autoload.php');

define('UMB_TEMPLATE_PATH', get_template_directory());
define('UMB_TEMPLATE_URI', get_template_directory_uri());


/* ================================
 * Includes/Requires =========== */

require_once(UMB_TEMPLATE_PATH . UMB_AUTOLOAD);