<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<header>
  ヘッダーエリア
  <nav class="global-nav">
    <?php
    wp_nav_menu(array(
      'theme_location'  => 'global_menu',
      'container'       => 'div',
      'container_class' => 'menu-container',
      'menu_class'      => 'menu',
      'fallback_cb'     => false
    ));
    ?>
  </nav>
</header>
