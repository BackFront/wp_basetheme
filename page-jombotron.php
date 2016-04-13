<?php
/**
 * Template Name: Page Jombotron
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
get_header();
the_post();
get_template_part('nav','main');

echo $twig->render('page-jombotron.twig',array(
    'the_title' => get_the_title(),
    'the_content' => get_the_content(),
));

get_footer();