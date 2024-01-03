<!DOCTYPE html>
<html>
<html <?php language_attributes(); ?>>

<head>
  <?php wp_head(); ?>
  <meta charset="UTF-8">

  <title>
    <?php
    if (is_front_page()) {
      echo 'آژانس خلاقیت وبیدا | طراحی و سئو سایت با خلاقیت بی‌پایان';
    } else {
      wp_title('|', true, 'right');
      echo bloginfo('name');
    }
    ?>
  </title>

  <meta property="og:site_name" content="آژانس خلاقیت وبیدا"/>
  <meta name="description" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="msapplication-tap-highlight" content="no" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="apple-touch-icon" sizes="180x180"
    href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.svg">
  <link rel="icon" type="image/png" sizes="32x32"
    href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.svg">
  <link rel="icon" type="image/png" sizes="16x16"
    href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.svg">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.svg">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <script type="application/ld+json">
    {
      "@context" : "https://schema.org",
      "@type" : "WebSite",
      "name" : "آژانس خلاقیت وبیدا",
      "url" : "https://webida.ir/"
    }
  </script>
  
</head>

<div id="q-app">