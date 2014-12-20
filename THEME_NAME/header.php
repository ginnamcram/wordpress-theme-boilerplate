<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <link rel="shortcut icon" href="<?php echo IMAGES ?>/favicon.ico">

  <?php wp_head(); ?>

</head>
<body>

  <header class="header">

    <div class="container">

      HEADER

      <div class="logo">

        <a href="<?php echo home_url(); ?>">

          <img src="<?php echo IMAGES ?>/logo.png" alt="<?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>">

        </a>

      </div>

      <?php wp_nav_menu(array(
        'theme_location' => 'nav-main'
      )); ?>

    </div>

  </header>