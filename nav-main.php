<?php
/**
 * Options / Values
 */
global $twig;
$menu_name = 'umb_nav_main';

/**
 * Render Page
 */
echo $twig->render('nav-main.twig', array(
    'site_title' => "TemplateBase",
    'home_url' => esc_url(home_url('/')),
    'action_before_nav_container' => do_action('umb_before_nav_container'),
    'action_after_nav_container' => do_action('umb_after_nav_container'),
    'action_before_nav_itens' => do_action('umb_before_nav_itens'),
    'action_after_nav_itens' => do_action('umb_after_nav_itens'),
    'itens_menu' => umb_get_menu_itens($menu_name),
));

/**
 * Testes / Debug
 */

//var_dump(umb_get_menu_itens($menu_name));