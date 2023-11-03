<?php get_header(); ?>

<body>
  <q-layout :view="rightLayout" class="gt-sm">
    <div class="container">
      <?php get_template_part('/layouts/desktop/MainLayout'); ?>
    </div>
    <q-page-container>
      <q-page>
        <?php get_template_part('/components/desktop/Carousel') ?>
        <div class="container">
          <div class="text-center q-py-lg">
            <h2 class="text-h2 text-secondary text-weight-900">خدمات <span
                class="text-primary text-weight-900">وبیدا</span></h2>
          </div>
          <div class="row items-center justify-between q-gutter-y-xl">
            <?php get_template_part('components/ServicesCard') ?>
          </div>

          <div class="container text-center q-mt-md">
            <h2 class="text-h2 text-secondary text-weight-900 q-pt-xl q-pb-lg">چرا مسئولیت طراحی سایت خود را به <span
                class="text-primary text-weight-900">وبیدا</span> بسپاریم</h2>

            <div class="flex justify-between items-center q-gutter-y-xl q-mb-xl q-pb-xl">
              <?php get_template_part('components/SelfPraiseCard') ?>
            </div>
          </div>
        </div>
        <?php get_template_part('components/BackToTop') ?>
      </q-page>
    </q-page-container>
  </q-layout>

  <q-layout :view="rightLayout" class="xs">
    <div class="container">
      <?php get_template_part('/layouts/mobile/MainLayout'); ?>
    </div>
    <q-page-container>
      <q-page>
        <?php get_template_part('/components/mobile/Carousel') ?>
        <div class="container">
          <div class="text-center q-py-lg">
            <h2 class="line-height-lg text-h2 text-secondary text-weight-900">خدمات <span
                class="text-primary text-weight-900">وبیدا</span></h2>
          </div>
          <div class="row items-center justify-between q-gutter-y-lg">
            <?php get_template_part('components/ServicesCard') ?>
          </div>

          <div class="text-center q-mt-md">
            <h2 class=" line-height-lg text-h2 text-secondary text-weight-900 q-pt-xl q-pb-lg">چرا مسئولیت طراحی سایت
              خود را به <span class="text-primary text-weight-900">وبیدا</span> بسپاریم</h2>

            <div class="flex justify-between items-center q-gutter-y-lg q-mb-xl q-pb-xl">
              <?php get_template_part('components/SelfPraiseCard') ?>
            </div>
          </div>
        </div>
        <?php get_template_part('components/BackToTop') ?>
      </q-page>
    </q-page-container>
  </q-layout>



  <?php get_footer(); ?>