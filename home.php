<?php
/*
Template Name: Blog
*/
get_header();
?>

<body <?php body_class(); ?>>
  <q-layout :view="rightLayout" class="gt-sm" v-if="$q.screen.gt.sm">
    <div class="container">
      <?php get_template_part('/layouts/desktop/MainLayout'); ?>
    </div>
    <q-page-container class="bg-white">
      <q-page class="container">
        <div class="post-container q-py-xl">
          <?php if (have_posts()):
            while (have_posts()):
              the_post(); ?>
              <?php get_template_part('components/shared/desktop/PostCard'); ?>
            <?php endwhile; endif; ?>
        </div>

        <?php get_template_part('components/shared/Pagination'); ?>


      </q-page>
    </q-page-container>
  </q-layout>

  <q-layout :view="rightLayout" class="xs" v-if="$q.screen.xs">
    <div class="container">
      <?php get_template_part('/layouts/desktop/MainLayout'); ?>
    </div>
    <q-page-container class="bg-white">
      <q-page class="container">
        <div class="column q-gutter-y-lg q-pb-xl">
          <?php if (have_posts()):
            while (have_posts()):
              the_post(); ?>
              <?php get_template_part('components/shared/mobile/PostCard'); ?>
            <?php endwhile; endif; ?>
        </div>

        <?php get_template_part('components/shared/Pagination'); ?>


      </q-page>
    </q-page-container>
  </q-layout>
  <?php get_footer(); ?>
</body>