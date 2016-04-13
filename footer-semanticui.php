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
echo $twig->render('footer-semanticui.twig', array(
    "scripts" => array(
        'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js',
        UMB_TEMPLATE_URI . '/assets/libs/semantic_ui/semantic.min.js',
        UMB_TEMPLATE_URI . '/assets/js/mainscript.js'
    ),
));
