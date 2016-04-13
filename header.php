<?php

global $twig;
echo $twig->render('header.twig', array(
    "body_class" => "",
    "charset" => get_bloginfo('charset'),
    "title" => wp_title('|', false, 'right'),
    "language_attributes" => get_language_attributes(),
    "styles" => array(
        UMB_TEMPLATE_URI . '/assets/css/bootstrap.css',
        UMB_TEMPLATE_URI . '/assets/css/bootstrap-theme.min.css',
        UMB_TEMPLATE_URI . '/assets/libs/semantic_ui/semantic.min.css',
        UMB_TEMPLATE_URI . '/assets/css/mainstyle.css'
    ),
    "scripts" => array(),
));
