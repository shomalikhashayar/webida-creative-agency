<?php
get_header();
?>

<body>
  <div id="q-app">
  <?php get_template_part('layout/MainLayout'); ?>
  <div class="q-pa-xl">
  <?php get_template_part('includes/section','archive'); ?>
  </div>
  <?php get_footer(); ?>