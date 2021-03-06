<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title>Design &amp; Development Studio - Doubletab</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta property="og:title" content="Design &amp; Development Studio - Doubletab">
  <meta property="og:type" content="website">
  <meta property="og:description" content="Doubletab is an app design, product design and development studio that excels in helping businesses better connect with their audience.">
  <meta property="og:site_name" content="Doubletab.com">
  <meta name="twitter:site" content="@doubletab">
  <meta name="twitter:title" content="Design &amp; Development Studio - Doubletab">
  <meta name="twitter:description" content="Doubletab is an app design, product design and development studio that excels in helping businesses better connect with their audience.">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="white">
  <meta name="application-name" content="&nbsp;">
  <meta name="google-site-verification" content="tIL3l7s_hfjfJXHYjt40xS9YOtSHNmJaAdjTNrqjOFs" />
  <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo( 'template_directory' ); ?>/images/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo( 'template_directory' ); ?>/images/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo( 'template_directory' ); ?>/images/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo( 'template_directory' ); ?>/images/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo( 'template_directory' ); ?>/images/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo( 'template_directory' ); ?>/images/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo( 'template_directory' ); ?>/images/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo( 'template_directory' ); ?>/images/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'template_directory' ); ?>/images/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo( 'template_directory' ); ?>/images/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo( 'template_directory' ); ?>/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo( 'template_directory' ); ?>/images/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo( 'template_directory' ); ?>/images/favicon-16x16.png">
  <link rel="manifest" href="<?php bloginfo( 'template_directory' ); ?>/images/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php bloginfo( 'template_directory' ); ?>/images/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <link rel="profile" href="http://gmpg.org/xfn/11" />

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/pitchform.css">
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/main.css">
  <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/menu.css">

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <!-- Animate.css + Font-awesome
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="<?php bloginfo( 'template_directory' ); ?>/css/animate.min.css" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <?php // wordpress head functions ?>
  <?php wp_head(); ?>
  <?php // end of wordpress head ?>

  <?php // drop Google Analytics Here ?>
  <?php // end analytics ?>

</head>

<body>

<!-- mobile menu -->
<a href="#cd-nav" class="cd-nav-trigger">Menu 
  <span class="cd-nav-icon"></span>

  <svg x="0px" y="0px" width="54px" height="54px" viewBox="-3 -3 60 60">
    <circle fill="transparent" stroke="#fff" stroke-width="2" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
  </svg>
</a>

<div id="cd-nav" class="cd-nav">
  <div class="cd-navigation-wrapper">
    <div class="cd-half-block four columns offset-by-two">
      <nav>
        <?php wp_nav_menu(array(
           'container' => false,                           // remove nav container
           'container_class' => 'menu cf',                 // class of container (should you choose to use it)
           'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
           'menu_class' => 'nav top-nav cf',               // adding custom nav class
           'theme_location' => 'main-nav',                 // where it's located in the theme
           'before' => '',                                 // before the menu
                 'after' => '',                                  // after the menu
                 'link_before' => '',                            // before each link
                 'link_after' => '',                             // after each link
                 'depth' => 0,                                   // limit the depth of the nav
           'fallback_cb' => ''                             // fallback function (if there is one)
        )); ?>
      </nav>
      <a class="startproject startproject-button">Start a Project</a>
    </div><!-- .cd-half-block -->
  </div> <!-- .cd-navigation-wrapper -->
</div> <!-- .cd-nav -->

<header class="navbar-header">  
  <a class="logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
    <?xml version="1.0" encoding="utf-8"?>
    <!-- Generator: Adobe Illustrator 18.1.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 1847.5 240" enable-background="new 0 0 1847.5 240" xml:space="preserve">
    <path fill="#FFFFFF" d="M481.8,232.1h-78.9v-17.8c-4.7,6.3-10.6,11.2-17.8,14.8c-7.1,3.6-14.8,5.5-23.2,5.5c-10.4,0-19.9-2.3-28.3-7
      c-8.4-4.7-15.2-10.8-20.2-18.4c-5.1-7.6-9-16-11.6-25.2c-2.7-9.2-4-18.6-4-28.3c0-9.2,1.5-18.3,4.4-27.2s7-16.9,12.3-24
      c5.3-7.1,11.9-12.8,20-17.2c8.1-4.3,16.9-6.5,26.4-6.5c8.5,0,16,1.4,22.4,4.2c6.4,2.8,12.8,7.4,19.1,13.8V47h-12.5V4.7H471
      l0.1,185.1h10.7V232.1z M402.9,137.7l-2.1-2.4c-1.5-1.6-3.8-3.1-6.9-4.7c-3.1-1.6-6.4-2.4-9.7-2.4c-6.1,0-11.1,2.3-15.1,6.9
      c-4,4.6-6,11.1-6,19.6c0,2.9,0.1,5.6,0.3,8.3c0.2,2.6,0.8,5.5,1.7,8.7c0.9,3.2,2.1,5.9,3.5,8.1c1.5,2.2,3.5,4.1,6.2,5.7
      c2.6,1.6,5.8,2.4,9.4,2.4c2.3,0,4.6-0.5,6.7-1.5c2.2-1,3.9-2,5.2-3.2c1.3-1.2,2.5-2.5,3.7-4c1.2-1.5,2-2.6,2.3-3.2
      c0.3-0.6,0.6-1.1,0.8-1.5V137.7z"/>
    <path fill="#FFFFFF" d="M491.5,156.3c0-24,7.4-42.6,22.3-55.7c14.9-13.1,35.2-19.7,61-19.7c26,0,46.4,6.6,61.3,19.7
      c14.9,13.1,22.3,31.7,22.3,55.7c0,16.2-3.5,30.2-10.6,42.2s-16.9,20.9-29.4,27c-12.5,6.1-27,9.2-43.5,9.2c-16.5,0-30.9-3.1-43.5-9.2
      c-12.5-6.1-22.3-15.1-29.4-27S491.5,172.5,491.5,156.3z M556,156.6c0,23.2,6.3,34.8,19,34.8c12.7,0,19-11.6,19-34.8
      c0-4.7-0.2-8.7-0.6-12c-0.4-3.3-1.2-6.6-2.4-10.1c-1.2-3.4-3.1-6-5.8-7.8c-2.7-1.8-6.1-2.6-10.1-2.6c-4.1,0-7.4,0.9-10.1,2.6
      c-2.7,1.8-4.6,4.3-5.8,7.8c-1.2,3.4-2,6.8-2.4,10.1C556.2,147.8,556,151.8,556,156.6z"/>
    <path fill="#FFFFFF" d="M775.7,210.5c-5.1,7.9-11.9,13.8-20.5,18c-8.6,4.1-18.3,6.2-29.2,6.2c-30.5,0-45.8-18.6-45.8-55.9v-52.1
      h-11.1V83.5h79.6v87.9c0,4.9,1.2,8.9,3.7,12c2.5,3.1,5.4,4.6,8.7,4.6c4.3,0,7.8-1.6,10.5-4.8s4-7.1,4-11.9v-44.8h-11.2V83.5h79.7
      v106.4h10.5v42.3h-79V210.5z"/>
    <path fill="#FFFFFF" d="M946.7,98.3c14.5-11.7,28.6-17.6,42.3-17.6c8.2,0,15.8,1.5,22.7,4.4c6.9,3,12.8,7,17.7,12
      c4.9,5,9,10.9,12.3,17.5c3.4,6.6,5.9,13.5,7.5,20.8c1.6,7.3,2.4,14.6,2.4,22.1c0,8-0.8,15.6-2.5,23c-1.7,7.4-4.3,14.4-7.8,20.9
      c-3.6,6.6-7.9,12.3-13,17.2c-5.1,4.9-11.3,8.8-18.5,11.6c-7.3,2.9-15.2,4.3-23.8,4.3c-6.9,0-13.5-1.5-19.6-4.4
      c-3.4-1.7-9.7-5.7-18.7-12.2l-5.5,14.1h-62.4V48.4h-11.6V6h78.5V98.3z M947.2,177.2l2.1,2.4c1.5,1.6,3.8,3.1,6.9,4.7
      c3.1,1.6,6.4,2.4,9.7,2.4c6.1,0,11.1-2.3,15.1-6.9c4-4.6,6-11.1,6-19.6c0-2.9-0.1-5.6-0.3-8.3c-0.2-2.6-0.8-5.5-1.7-8.7
      c-0.9-3.2-2.1-5.9-3.5-8.1c-1.5-2.2-3.5-4.1-6.2-5.7c-2.6-1.6-5.8-2.4-9.4-2.4c-2.3,0-4.6,0.5-6.7,1.5c-2.2,1-3.9,2-5.2,3.2
      c-1.3,1.2-2.5,2.5-3.7,4c-1.2,1.5-2,2.6-2.3,3.2c-0.3,0.6-0.6,1.1-0.8,1.5V177.2z"/>
    <path fill="#FFFFFF" d="M1145.9,189.8h10.8v42.3H1067v-42.3h10.3V49.5h-11.6V6.1h80.3V189.8z"/>
    <path fill="#FFFFFF" d="M1209.2,224.5c-12.2-6.7-21.6-15.8-28.4-27.2c-6.7-11.4-10.1-23.9-10.1-37.4c0-15.3,3.2-28.8,9.6-40.7
      c6.4-11.9,15.8-21.3,28.2-28.2c12.4-6.9,27-10.3,43.6-10.3c15.9,0,29.7,3.4,41.5,10.2c11.7,6.8,20.5,15.7,26.3,26.8
      c5.8,11.1,8.7,23.6,8.7,37.4c0,3.1-0.2,6.4-0.7,9.8c-0.8,2.7-1.5,4.2-1.9,4.5c-0.4,0.3-1.5,0.1-3.3-0.6h-83.5
      c0,9.3,2.2,17.1,6.6,23.2c4.4,6.1,10.4,9.2,18,9.2c6.7,0,11.5-1.6,14.6-4.9c3.1-3.2,4.7-7.6,4.9-13h42.6v31.1
      c-12.2,7.3-24.2,12.5-36,15.5s-25.1,4.6-39.9,4.6C1235,234.6,1221.4,231.3,1209.2,224.5z M1239.5,145.2h29.8c0.1-3.2,0-6.1-0.2-8.5
      c-0.2-2.4-0.8-5.1-1.6-8.1c-0.8-3-2.4-5.3-4.6-6.9c-2.2-1.6-5-2.4-8.5-2.4c-5,0-8.7,2.2-11.2,6.7c-2.5,4.5-3.7,9.5-3.7,15.2V145.2z"
      />
    <path fill="#FFFFFF" d="M1451,225.3l-5.1,2.4c-3.4,1.6-8.7,3.1-15.8,4.6c-7.1,1.5-14.4,2.3-21.8,2.3c-35.3,0-52.9-18.6-52.7-55.9
      l0.1-52.1h-15V83.5h14.3V51.7l67.5-14.6v46.3h21.1v43.1h-21.1l-0.1,44.8c0,3.6,1,6.9,2.9,9.9c1.9,3,5.5,4.5,10.7,4.5
      c4.2,0,9.2-0.6,15-1.9V225.3z"/>
    <path fill="#FFFFFF" d="M1469.4,170c3.5-5.8,8.1-10.5,13.8-14.1c5.7-3.6,12.1-6.4,19.2-8.3c7.1-1.9,14.4-2.8,22.1-2.8
      c13.5,0,25.3,1.8,35.5,5.3v-6.2c0-15.3-9.8-23-29.3-23c-13.2,0-23.2,4.4-29.8,13.2h-24.3V90.4l9.3-2.5c6.2-1.6,14.9-3.2,26.1-4.8
      c11.2-1.6,21.7-2.4,31.6-2.4c3.8,0,7.2,0,10.3,0.1c3.1,0.1,7.5,0.5,13.2,1.1c5.8,0.6,10.9,1.5,15.4,2.7c4.5,1.2,9.3,2.9,14.6,5.3
      c5.2,2.4,9.6,5.2,13,8.4c3.5,3.2,6.4,7.4,8.7,12.5s3.5,10.9,3.5,17.3v61.7h10.5v42.3h-65.5l-6.9-16.5c-4.6,6-11,10.7-19,14
      s-15.9,5-23.4,5c-15,0-27.7-4.1-38.2-12.3c-10.5-8.2-15.7-19.2-15.7-32.9C1464.2,182.3,1465.9,175.8,1469.4,170z M1535.7,197.1
      c2.4,2.6,5.6,4,9.7,4c3,0,5.7-0.6,8.3-1.8c2.6-1.2,4.3-2.1,5-2.8c0.7-0.7,1.3-1.3,1.7-1.7v-20.4l-1.9-0.7c-1.3-0.6-3.1-1.1-5.3-1.5
      c-2.3-0.5-4.4-0.7-6.4-0.7c-4,0-7.4,1.6-10.3,4.8c-2.9,3.2-4.3,6.8-4.3,10.7C1532.1,191.1,1533.3,194.5,1535.7,197.1z"/>
    <path fill="#FFFFFF" d="M1722.5,98.3c14.5-11.7,28.6-17.6,42.3-17.6c8.2,0,15.8,1.5,22.7,4.4c6.9,3,12.8,7,17.7,12
      c4.9,5,9,10.9,12.3,17.5c3.4,6.6,5.9,13.5,7.5,20.8c1.6,7.3,2.4,14.6,2.4,22.1c0,8-0.8,15.6-2.5,23c-1.7,7.4-4.3,14.4-7.8,20.9
      c-3.6,6.6-7.9,12.3-13,17.2c-5.1,4.9-11.3,8.8-18.5,11.6c-7.3,2.9-15.2,4.3-23.8,4.3c-6.9,0-13.5-1.5-19.6-4.4
      c-3.4-1.7-9.7-5.7-18.7-12.2l-5.5,14.1h-62.4V48.4H1644V6h78.5V98.3z M1723.1,177.2l2.1,2.4c1.5,1.6,3.8,3.1,6.9,4.7
      c3.1,1.6,6.4,2.4,9.7,2.4c6.1,0,11.1-2.3,15.1-6.9c4-4.6,6-11.1,6-19.6c0-2.9-0.1-5.6-0.3-8.3c-0.2-2.6-0.8-5.5-1.7-8.7
      c-0.9-3.2-2.1-5.9-3.5-8.1c-1.5-2.2-3.5-4.1-6.2-5.7c-2.6-1.6-5.8-2.4-9.4-2.4c-2.3,0-4.6,0.5-6.7,1.5c-2.2,1-3.9,2-5.2,3.2
      c-1.3,1.2-2.5,2.5-3.7,4c-1.2,1.5-2,2.6-2.3,3.2c-0.3,0.6-0.6,1.1-0.8,1.5V177.2z"/>
    <path fill="#FFFFFF" d="M177.8,235.3c-3.9,0-7.9-1.2-11.4-3.6c-9.1-6.3-11.3-18.8-5-27.8l58.8-84.7L164,36.5
      c-6.2-9.1-3.8-21.6,5.3-27.8c9.1-6.2,21.6-3.8,27.8,5.3l71.7,105.4l-74.5,107.3C190.4,232.3,184.2,235.3,177.8,235.3z"/>
    <path fill="#FFFFFF" d="M104.5,235.3c-3.9,0-7.9-1.2-11.4-3.6c-9.1-6.3-11.3-18.8-5-27.8l66.7-96c6.3-9.1,18.8-11.3,27.8-5
      c9.1,6.3,11.3,18.8,5,27.8l-66.7,96C117.1,232.3,110.8,235.3,104.5,235.3z"/>
    <path fill="#FFFFFF" d="M37.8,235.3c-3.9,0-7.9-1.2-11.4-3.6c-9.1-6.3-11.3-18.8-5-27.8l66.7-96c6.3-9.1,18.8-11.3,27.8-5
      c9.1,6.3,11.3,18.8,5,27.8l-66.7,96C50.4,232.3,44.2,235.3,37.8,235.3z"/>
    </svg>
  </a>
</header>

<!-- end header -->