<?php
/*
Template Name: Blog
*/
get_header();
?>

<body <?php body_class(); ?>>

  <q-layout :view="rightLayout" v-if="$q.screen.xs">
    <div class="container">
      <?php get_template_part('/layouts/mobile/MainLayout'); ?>
    </div>
    <q-page-container class="bg-accent">
      <q-page class="container">
        <?php get_template_part('components/blog/mobile/CategoriesBar'); ?>
        <?php get_template_part('components/blog/mobile/HeroSection'); ?>
        <?php get_template_part('components/blog/mobile/PostsSection'); ?>
      </q-page>
    </q-page-container>
  </q-layout>

  <q-layout :view="rightLayout" v-if="$q.screen.gt.xs">

    <div v-if="$q.screen.sm">
      <?php get_template_part('/layouts/tablet/MainLayout'); ?>
    </div>

    <div v-if="$q.screen.gt.sm">
      <?php get_template_part('/layouts/desktop/MainLayout'); ?>
    </div>

    <q-page-container class="bg-accent">
      <q-page class="container">
        <div v-if="$q.screen.sm" class="q-mt-xl">
          <?php get_template_part('components/blog/tablet/CategoriesBar'); ?>
        </div>
        <div v-if="$q.screen.gt.sm" class="row justify-between q-gutter-x-lg q-mt-xl">
          <?php get_template_part('components/blog/desktop/CategoriesBar'); ?>
        </div>
        <div class="q-mt-xl">
          <?php get_template_part('components/blog/desktop/HeroSection'); ?>
        </div>
        <?php get_template_part('components/blog/desktop/PostsSection'); ?>
      </q-page>
    </q-page-container>
  </q-layout>

  <?php get_footer(); ?>
</body>