<?php
get_header();
get_template_part('nav','main');

echo $twig->render('index.twig',array(
    'the_title' => get_the_title(),
    'the_content' => get_the_content()
));

get_footer();