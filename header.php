<?php

global $twig;
echo $twig->render('header.phtml', array(
    "title" => 'Home',
    "styles" => array(
        UMB_TEMPLATE_URI . '/assets/css/bootstrap.css',
        UMB_TEMPLATE_URI . '/assets/css/mainstyle.css'
    ),
    "wphead" => wp_head()
));
