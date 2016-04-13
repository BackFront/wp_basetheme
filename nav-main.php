<?php
/**
 * @package Umbrella 
 * @subpackage wp_basetheme
 * @version 1.0.0
 * 
 * @author Douglas Alves <alves.douglaz@gmail.com>
 * @link http://https://github.com/BackFront/wp_basetheme/ Project Repository
 * @license http://www.apache.org/licenses/LICENSE-2.0/ Apache License 2.0
 * @since 1.0
 */

/** Options / Values **/
global $twig;

$menu_args = array(
    'echo' => false,
    'container' => null,
    'menu_class' => "nav navbar-nav",
    'walker' => new BootstrapNavMenuWalker()
);

/** Render Page **/
echo $twig->render('nav-main.twig', array(
    'site_title' => "TemplateBase",
    'home_url' => esc_url(home_url('/')),
    'action_before_nav_container' => do_action('umb_before_nav_container'),
    'action_after_nav_container' => do_action('umb_after_nav_container'),
    'action_before_nav_itens' => do_action('umb_before_nav_itens'),
    'action_after_nav_itens' => do_action('umb_after_nav_itens'),
    'menu' => wp_nav_menu($menu_args)
));

/** Tests / Debugs **/

//var_dump(umb_get_menu_itens($menu_name));
