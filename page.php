<?php
get_header();
the_post();
get_template_part('nav','main');

echo $twig->render('page.twig',array(
    'the_title' => get_the_title(),
    'the_content' => get_the_content(),
));

get_footer();