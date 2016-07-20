<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package rever
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
   <link rel="profile" href="http://gmpg.org/xfn/11">
   <title><?php wp_title(''); ?></title>
   <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
   <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
   <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
   <?php endif; ?>
   <?php wp_head(); ?>
</head>

<body>
   <menu>
      <ul>
         <li><a href='#home'><span>Rever em ação</span></a></li>
         <li><a href='#'><span>Quem Somos</span></a>
            <ul>
               <li><a href='#história'><span>Histórico</span></a></li>
               <li id="sub-menu"><a href='#equipe'><span>Equipe</span></a>
                  <ul id="menu-equipe">
                     <li><a href='#'><span>OSCIP</span></a></li>
                     <li><a href='#'><span>Técnica</span></a></li>
                  </ul>
               </li>
               <li><a href='#'><span>Locais</span></a></li>
               <li><a href='#'><span>Mobilização</span></a></li>
            </ul>
         </li>
         <li><a href='#'><span>Projetos</span></a>
            <ul id=menu-projeto>
               <li><a href='#'><span>Ciência</span></a></li>
               <li><a href='#'><span>Sustentabilidade</span></a></li>
               <li><a href='#'><span>Empoderamento</span></a></li>
            </ul>
         </li>
         <li><a href='#'><span>Artigos</span></a></li>
         <li><a href='#'><span>Em Ação</span></a></li>
         <li><a href='#contato'><span>Contato</span></a></li>
      </ul>
      <span class="menu-anchor"></span>
   </menu> <!-- FIM DO MENU -->

   <main class="container-fluid conteudo"><!-- main conteudo -->

      <h1><?php bloginfo('name'); ?></h1>
      <h2><?php bloginfo('description'); ?></h2>

      <ul id="nav">
         <?php wp_list_cats('sort_column=name'); ?>
      </ul>