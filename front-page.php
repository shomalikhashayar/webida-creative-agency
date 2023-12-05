<?php get_header(); ?>

<body>
  
  <q-layout :view="rightLayout" class="xs" v-if="$q.screen.xs">
    <div class="container">
      <?php get_template_part('/layouts/mobile/MainLayout'); ?>
    </div>
    <q-page-container class="bg-white">
      <q-page>
        <?php get_template_part('/components/front-page/mobile/HeroSection') ?>
        <div class="container">
          <div class="text-center q-py-lg">
            <h2 class="line-height-lg text-h2 text-secondary text-weight-900">خدمات <span
                class="text-primary text-weight-900">وبیدا</span></h2>
          </div>
          <div class="column q-gutter-y-lg">
            <?php get_template_part('components/front-page/mobile/ServicesCard') ?>
          </div>

          <div class="text-center q-mt-md">
            <h2 class=" line-height-lg text-h2 text-secondary text-weight-900 q-pt-xl q-pb-lg">چرا مسئولیت طراحی سایت
              خود را به <span class="text-primary text-weight-900">وبیدا</span> بسپاریم</h2>

            <div class="column q-gutter-y-lg q-mb-xl">
              <?php get_template_part('components/front-page/mobile/SelfPraiseCard') ?>
            </div>
          </div>
        </div>

      </q-page>
    </q-page-container>
  </q-layout>

  <q-layout :view="rightLayout" class="sm" v-if="$q.screen.sm">
    <div class="container">
      <?php get_template_part('/layouts/tablet/MainLayout'); ?>
    </div>
    <q-page-container class="bg-white">
      <q-page>
        <?php get_template_part('/components/front-page/tablet/HeroSection') ?>
        <div class="container">
          <div class="text-center q-py-lg">
            <h2 class="text-h1 text-secondary text-weight-900">خدمات <span
                class="text-primary text-weight-900">وبیدا</span></h2>
          </div>
          <div class="row items-center justify-between q-gutter-y-xl">
            <?php get_template_part('/components/front-page/tablet/ServicesCard') ?>
          </div>

          <div class="text-center q-mt-md">
            <h2 class="text-h1 text-secondary text-weight-900 q-pt-xl q-pb-lg">چرا مسئولیت طراحی سایت خود را به <span
                class="text-primary text-weight-900">وبیدا</span> بسپاریم</h2>

            <div class="flex justify-between items-center q-gutter-y-xl q-mb-xl q-pb-xl">
              <?php get_template_part('/components/front-page/tablet/SelfPraiseCard') ?>
            </div>
          </div>
        </div>

      </q-page>
    </q-page-container>
  </q-layout>

  <q-layout :view="rightLayout" class="md" v-if="$q.screen.md">
    <div class="container">
      <?php get_template_part('/layouts/laptop/MainLayout'); ?>
    </div>
    <q-page-container class="bg-white">
      <q-page>
        <div class="bg-accent">
        <?php get_template_part('/components/front-page/tablet/HeroSection') ?>
        </div>
        <div class="container">
          <div class="text-center q-py-lg">
            <h2 class="text-h2 text-secondary text-weight-900">خدمات <span
                class="text-primary text-weight-900">وبیدا</span></h2>
          </div>
          <div class="services-card-container">
            <?php get_template_part('/components/front-page/laptop/ServicesCard') ?>
          </div>

          <div class="text-center q-mt-md">
            <h2 class="text-h2 text-secondary text-weight-900 q-pt-xl q-pb-lg">چرا مسئولیت طراحی سایت خود را به <span
                class="text-primary text-weight-900">وبیدا</span> بسپاریم</h2>

            <div class="self-praises-card-container q-mb-xl q-pb-xl">
              <?php get_template_part('/components/front-page/laptop/SelfPraiseCard') ?>
            </div>
          </div>
        </div>

      </q-page>
    </q-page-container>
  </q-layout>

  <q-layout :view="rightLayout" class="gt-md" v-if="$q.screen.gt.md">
    <div class="container">
      <?php get_template_part('/layouts/desktop/MainLayout'); ?>
    </div>
    <q-page-container class="bg-white">
      <q-page>
        <?php get_template_part('/components/front-page/desktop/Carousel') ?>
        <div class="container">
          <div class="text-center q-py-lg">
            <h2 class="text-h2 text-secondary text-weight-900">خدمات <span
                class="text-primary text-weight-900">وبیدا</span></h2>
          </div>
          <div class="row items-center justify-between q-gutter-y-xl">
            <?php get_template_part('/components/front-page/desktop/ServicesCard') ?>
          </div>

          <div class="text-center q-mt-md">
            <h2 class="text-h2 text-secondary text-weight-900 q-pt-xl q-pb-lg">چرا مسئولیت طراحی سایت خود را به <span
                class="text-primary text-weight-900">وبیدا</span> بسپاریم</h2>

            <div class="flex justify-between items-center q-gutter-y-xl q-mb-xl q-pb-xl">
              <?php get_template_part('/components/front-page/desktop/SelfPraiseCard') ?>
            </div>
          </div>
        </div>

      </q-page>
    </q-page-container>
  </q-layout>


  <?php get_footer(); ?>