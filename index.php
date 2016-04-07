<?php
get_header();
get_template_part('nav','main');

echo $twig->render('index.phtml',array(
    'welcome_title' => "Olá mundo",
    'welcome_description' => 'teste'
));

get_footer();