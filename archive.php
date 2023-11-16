<?php get_header(); ?>

<body <?php body_class(); ?>>
  <q-layout :view="rightLayout" class="gt-sm" v-if="$q.screen.gt.sm">
    <div class="container">
      <?php get_template_part('/layouts/desktop/MainLayout'); ?>
    </div>
    <q-page-container class="bg-white">
      <q-page>
        <div class="container">
          <h1 class="text-center text-secondary q-py-xl text-weight-900 text-h3">
            <?php single_cat_title('آموزش ') ?>
          </h1>
          <?php get_template_part('components/shared/PostCard'); ?>
          <?php get_template_part('components/shared/Pagination'); ?>

        </div>
      </q-page>
    </q-page-container>
  </q-layout>

  <q-layout :view="rightLayout" class="xs" v-if="$q.screen.xs">>
    <div class="container">
      <?php get_template_part('/layouts/mobile/MainLayout'); ?>
    </div>
    <q-page-container class="bg-white">
      <q-page>
        <div class="container">
          <h1 class="text-center text-secondary q-py-xl text-weight-900 text-h3">
            <?php single_cat_title('آموزش ') ?>
          </h1>
          <?php get_template_part('components/shared/PostCard'); ?>
          <?php get_template_part('components/shared/Pagination'); ?>

        </div>
      </q-page>
    </q-page-container>
  </q-layout>

  <?php get_footer(); ?>