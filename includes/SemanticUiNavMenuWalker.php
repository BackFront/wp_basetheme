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
class SemanticUiNavMenuWalker {
    private $menu_name;

    public function setMenu($menu_name) {
        $this->menu_name = $menu_name;
    }

    public function returnMenu() {
        $menu_name = $this->menu_name; // this is the registered menu name
        $html = '';
        if (( $locations = get_nav_menu_locations() ) && isset($locations[$menu_name])) :
            $menu = wp_get_nav_menu_object($locations[$menu_name]);
            $menu_items = wp_get_nav_menu_items($menu->term_id);
            $html .= '<div class="ui vertical menu">';
            foreach ((array) $menu_items as $key => $menu_item) :
                $title = $menu_item->title;
                $url = $menu_item->url;
                $class = $menu_item->classes; // get array with class names
                if (get_the_ID() == $menu_item->object_id) { // check for current page
                    $html .= '<a class="item active" href="' . $url . '">';
                } else {
                    $html .= '<a class="item" href="' . $url . '">';
                }
                $html .= '<i class="item ' . implode(' ', $class) . '"></i>' . $title;
                $html .= '</a>';
            endforeach;
            $html .= '</div>';
        else :
            $html .= '<div class="ui error message"><p>Menu "' . $menu_name . '" not defined.</p></div>';
        endif;
        return $html;
    }

}
