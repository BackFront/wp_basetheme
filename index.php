<?php
get_header();
get_template_part('nav','main');

$lipsum = '<b>Template Base</b> é um template pre moldado para criação de novos templates para wordpress. <br> Você pode saber mais no <a hre="https://github.com/BackFront/wp_basetheme">repositório</a> do projeto';

echo $twig->render('index.phtml',array(
    'welcome_title' => "Olá mundo",
    'welcome_description' => $lipsum
));

get_footer();