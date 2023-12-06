<?php get_header(); ?>

<body <?php body_class(); ?>>

  <q-layout :view="rightLayout" class="xs" v-if="$q.screen.xs">
    <div class="container">
      <?php get_template_part('/layouts/mobile/MainLayout'); ?>
    </div>
    <q-page-container class="bg-white">
      <q-page>
        <div class="container">
          <h1 class="text-center text-secondary q-py-xl text-weight-900 text-h3">
            <?php single_cat_title('آموزش ') ?>
          </h1>
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
        </div>
      </q-page>
    </q-page-container>
  </q-layout>

  <q-layout :view="rightLayout" v-if="$q.screen.sm">
    <div class="container">
      <?php get_template_part('/layouts/tablet/MainLayout'); ?>
    </div>
    <q-page-container class="bg-white">
      <q-page>
        <div class="container">
          <h1 class="text-center text-secondary q-py-xl text-weight-900 text-h3">
            <?php single_cat_title('آموزش ') ?>
          </h1>
          <div class="post-container q-pb-xl">
            <?php if (have_posts()):
              while (have_posts()):
                the_post(); ?>
                <?php get_template_part('components/shared/tablet/PostCard'); ?>
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
        </div>
      </q-page>
    </q-page-container>
  </q-layout>

  <q-layout :view="rightLayout" v-if="$q.screen.md">
    <div class="container">
      <?php get_template_part('/layouts/laptop/MainLayout'); ?>
    </div>
    <q-page-container class="bg-white">
      <q-page>
        <div class="container">
          <h1 class="text-center text-secondary q-py-xl text-weight-900 text-h3">
            <?php single_cat_title('آموزش ') ?>
          </h1>
          <div class="post-container q-pb-xl">
            <?php if (have_posts()):
              while (have_posts()):
                the_post(); ?>
                <?php get_template_part('components/shared/laptop/PostCard'); ?>
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
        </div>
      </q-page>
    </q-page-container>
  </q-layout>

  <q-layout :view="rightLayout" v-if="$q.screen.lg">
    <div class="container">
      <?php get_template_part('/layouts/desktop/MainLayout'); ?>
    </div>
    <q-page-container class="bg-white">
      <q-page>
        <div class="container">
          <h1 class="text-center text-secondary q-py-xl text-weight-900 text-h3">
            <?php single_cat_title('آموزش ') ?>
          </h1>
          <div class="post-container q-pb-xl">
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
        </div>
      </q-page>
    </q-page-container>
  </q-layout>

  <q-layout :view="rightLayout" v-if="$q.screen.gt.lg">
    <div class="container">
      <?php get_template_part('/layouts/desktop/MainLayout'); ?>
    </div>
    <q-page-container class="bg-white">
      <q-page>
        <div class="container">
          <h1 class="text-center text-secondary q-py-xl text-weight-900 text-h3">
            <?php single_cat_title('آموزش ') ?>
          </h1>
          <div class="post-container q-pb-xl">
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
        </div>
      </q-page>
    </q-page-container>
  </q-layout>

  <?php get_footer(); ?>