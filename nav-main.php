<?php

/**
 * Options / Values
 */
global $twig;

$menu_args = array(
    'echo' => false,
    'container' => null,
    'menu_class' => "nav navbar-nav",
    'walker' => new BootstrapNavMenuWalker()
);

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
    'menu' => wp_nav_menu($menu_args)
));

/**
 * Testes / Debug
 */

//var_dump(umb_get_menu_itens($menu_name));
