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

$menu = new SemanticUiNavMenuWalker();
$menu->setMenu('umb_nav_main');


$menu_args = array(
    'echo' => false,
);

/** Render Page **/
echo $twig->render('nav-semanticui.twig', array(
    'action_before_nav_container' => do_action('umb_before_nav_container'),
    'action_after_nav_container' => do_action('umb_after_nav_container'),
    'action_before_nav_itens' => do_action('umb_before_nav_itens'),
    'action_after_nav_itens' => do_action('umb_after_nav_itens'),
    'menu' => $menu($menu_args)
));

/** Tests / Debugs **/

//var_dump(umb_get_menu_itens($menu_name));
