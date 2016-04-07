<?php
global $twig;
echo $twig->render('header.phtml', array(
    "body_class" => "",
    "charset" => get_bloginfo( 'charset' ),
    "title" => wp_title( '|', true, 'right' ),
    "language_attributes" => get_language_attributes(),
    "styles" => array(
        UMB_TEMPLATE_URI . '/assets/css/bootstrap.css',
        UMB_TEMPLATE_URI . '/assets/css/mainstyle.css'
    )
));
return $twig->render('header.phtml', array(
    "wp_head" => wp_head()
));