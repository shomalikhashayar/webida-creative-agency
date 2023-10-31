<?php get_header(); ?>

<body <?php body_class(); ?>>
  <q-layout :view="rightLayout">
    <div class="container">
      <?php get_template_part('layouts/MainLayout'); ?>
    </div>
    <q-page-container>
      <q-page>
        <div class="container">
          <?php get_template_part('includes/section', 'archive'); ?>
          
        </div>
        <?php get_template_part('components/BackToTop') ?>
      </q-page>
    </q-page-container>
  </q-layout>

  <?php get_footer(); ?>