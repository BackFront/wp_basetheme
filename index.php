<?php
get_header();
echo $twig->render('index.phtml',array(
    'ola' => "Olá mundo"
));
get_footer();