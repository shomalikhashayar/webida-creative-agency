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
    <q-page-container class="bg-accent">
      <q-page class="container">

        <div class="row justify-between q-gutter-x-lg q-mt-xl">
          <?php get_template_part('components/blog/desktop/CategoriesBar'); ?>
        </div>

        <div class="q-mt-xl">
          <?php get_template_part('components/blog/desktop/HeroSection'); ?>
        </div>

        <div class="post-container q-my-xl">
          <?php if (have_posts()):
            while (have_posts()):
              the_post(); ?>
              <?php get_template_part('components/shared/desktop/PostCard'); ?>
            <?php endwhile; endif; ?>
        </div>

        <?php
          global $wp_query;
          $total_pages = $wp_query->max_num_pages;

          if ($total_pages > 1):
            ?>
            <div class="q-mb-xl">
              <?php get_template_part('components/shared/Pagination'); ?>
            </div>
          <?php endif; ?>


      </q-page>
    </q-page-container>
  </q-layout>

  <q-layout :view="rightLayout" class="xs" v-if="$q.screen.xs">
    <div class="container">
      <?php get_template_part('/layouts/mobile/MainLayout'); ?>
    </div>
    <q-page-container class="bg-accent">
      <q-page class="container">

        <div class="q-my-lg">
          <q-scroll-area :thumb-style="thumbStyle" :bar-style="barStyle" style="height: 80px;" class="full-width">
            <div class="row justify-between no-wrap q-gutter-x-lg">
              <?php get_template_part('components/blog/mobile/CategoriesBar'); ?>
            </div>
          </q-scroll-area>
        </div>

        <div class="q-mt-md q-mb-xl">
          <?php get_template_part('components/blog/mobile/HeroSection'); ?>
        </div>

        <div class="column q-gutter-y-lg q-pb-xl">
          <?php if (have_posts()):
            while (have_posts()):
              the_post(); ?>
              <?php get_template_part('components/shared/mobile/PostCard'); ?>
            <?php endwhile; endif; ?>
        </div>

        <?php
          global $wp_query;
          $total_pages = $wp_query->max_num_pages;

          if ($total_pages > 1):
            ?>
            <div class="q-mb-xl">
              <?php get_template_part('components/shared/Pagination'); ?>
            </div>
          <?php endif; ?>
      </q-page>
    </q-page-container>
  </q-layout>
  <?php get_footer(); ?>
</body>