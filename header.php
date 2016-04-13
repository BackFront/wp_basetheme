<?php

/**
 * @package Umbrella 
 * @subpackage wp_basetheme
 * @version 1.0.0
 * 
 * @author Douglas Alves <alves.douglaz@gmail.com>
 * @link http://https://github.com/BackFront/wp_basetheme/ Project Repository
 * @license http://www.apache.org/licenses/LICENSE-2.0/ Apache License 2.0
 * @since 1.0
 */
global $twig;
echo $twig->render('header.twig', array(
"body_class" => "",
 "charset" => get_bloginfo('charset'),
 "title" => wp_title('|', false, 'right'),
 "language_attributes" => get_language_attributes(),
 "styles" => array(
UMB_TEMPLATE_URI . '/assets/css/bootstrap.css',
 UMB_TEMPLATE_URI . (!is_page('semantic-ui') ): '/assets/css/bootstrap-theme.min.css' ? '/assets/libs/semantic_ui/semantic.min.css',
 UMB_TEMPLATE_URI . '/assets/css/mainstyle.css'
),
 "scripts" => array(),
));
