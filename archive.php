<?php get_header(); ?>

<body <?php body_class(); ?>>
  <q-layout :view="rightLayout">
    <div class="container">
      <?php get_template_part('/layouts/desktop/MainLayout'); ?>
    </div>
    <q-page-container>
      <q-page>
        <div class="container">
          <h1 class="text-center text-secondary q-py-xl text-weight-900 text-h3">
            <?php single_cat_title('آموزش ') ?>
          </h1>
          <?php get_template_part('includes/section', 'archive'); ?>
          <?php get_template_part('components/Pagination'); ?>

        </div>
        <?php get_template_part('components/BackToTop') ?>
      </q-page>
    </q-page-container>
  </q-layout>

  <?php get_footer(); ?>