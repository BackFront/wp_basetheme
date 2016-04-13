<?php
global $twig;
echo $twig->render('footer.twig',array(
    "footer" => "Place sticky footer content here",
    "scripts" => array(
        'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js',
        UMB_TEMPLATE_URI . '/assets/js/bootstrap.js',
    ),
));