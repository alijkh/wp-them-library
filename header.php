<html>
 <head>
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ermile.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
 </head>
<body>
 <div class="container">
  <header class="row">
  <div class="backgrund">
     <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
  </div>
    <div class="search"><!--   <?php get_search_form(); ?>--></div>
  </header>
      <nav><?php wp_nav_menu(['theme_location' => 'menu_header', 'depth' => '2',]); ?></nav>
      <hr>