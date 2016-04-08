<?php
global $twig;
echo $twig->render('nav-main.twig',array(
    'site_title' => "TemplateBase",
    'home_url' => esc_url( home_url( '/' ) ),
));