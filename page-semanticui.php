<?php
/**
 * Template Name: Page Semantic-UI
 *
 * @package Umbrella 
 * @subpackage wp_basetheme
 * @version 1.0.0
 * 
 * @author Douglas Alves <alves.douglaz@gmail.com>
 * @link http://https://github.com/BackFront/wp_basetheme/ Project Repository
 * @license http://www.apache.org/licenses/LICENSE-2.0/ Apache License 2.0
 * @since 1.0
 */

/** Options / Values * */

/** Call external pages * */
get_header();
the_post();

/** Render Page * */
echo $twig->render('page-semanticui.twig', array(
    
));

/** Tests / Debugs * */

/** Call external pages after render * */
get_footer('semanticui');