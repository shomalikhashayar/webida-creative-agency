<?php get_header(); ?>

<body>
<!-- لایه موبایل -->
  <q-layout :view="rightLayout" v-if="$q.screen.xs">
    <div class="container">
      <?php get_template_part('/layouts/mobile/MainLayout'); ?>
    </div>
    <q-page-container class="bg-white">
      <q-page>
        <?php get_template_part('/components/front-page/mobile/HeroSection') ?>
        <div class="container">
          <div class="text-center q-py-lg">
            <h2 class="line-height-lg text-h3 text-secondary text-weight-900">خدمات <span
                class="text-primary text-weight-900">وبیدا</span></h2>
          </div>
          <div class="column q-gutter-y-lg">
            <?php get_template_part('components/front-page/mobile/ServicesCard') ?>
          </div>

          <div class="text-center q-mt-md">
            <h2 class=" line-height-lg text-h3 text-secondary text-weight-900 q-pt-xl q-pb-lg">چرا مسئولیت طراحی سایت
              خود را به <span class="text-primary text-weight-900">وبیدا</span> بسپاریم</h2>

            <div class="column q-gutter-y-lg q-mb-xl">
              <?php get_template_part('components/front-page/mobile/SelfPraiseCard') ?>
            </div>
          </div>
        </div>

      </q-page>
    </q-page-container>
  </q-layout>

<!-- باقی لایه ها -->
  <q-layout :view="rightLayout" v-if="$q.screen.gt.xs">
    <!-- main layout تبلت -->

  <div class="container" v-if="$q.screen.sm">
    <?php get_template_part('/layouts/tablet/MainLayout'); ?>
  </div>
  <!-- main layout دسکتاپ -->
  <div class="container" v-if="$q.screen.gt.sm">
    <?php get_template_part('/layouts/desktop/MainLayout'); ?>
  </div>
  <q-page-container class="bg-white">
    <q-page>

      <!-- کروسل دسکتاپ -->
      <div class="bg-accent" v-if="$q.screen.gt.sm">
        <?php get_template_part('/components/front-page/desktop/Carousel') ?>
      </div>
      <!-- هیرو تبلت -->
      <div class="bg-accent" v-if="$q.screen.sm">
        <?php get_template_part('/components/front-page/tablet/HeroSection') ?>
      </div>
      <!-- کانتینر دسکتاپ -->
      <div class="container" v-if="$q.screen.gt.sm">
        <div class="text-center q-py-lg">
          <h2 class="text-h2 text-secondary text-weight-900">خدمات <span
              class="text-primary text-weight-900">وبیدا</span></h2>
        </div>
        <!-- کارت های خدمات در حالت دسکتاپ -->
        <div class="services-card-container" v-if="$q.screen.gt.md">
          <?php get_template_part('/components/front-page/desktop/ServicesCard') ?>
        </div>
        <!-- کارت های خدمات در حالت لپتاپ -->
        <div class="services-card-container" v-if="$q.screen.md">
          <?php get_template_part('/components/front-page/laptop/ServicesCard') ?>
        </div>

        <div class="text-center q-mt-md">
          <h2 class="text-h2 text-secondary text-weight-900 q-pt-xl q-pb-lg">چرا مسئولیت طراحی سایت خود را به <span
              class="text-primary text-weight-900">وبیدا</span> بسپاریم</h2>

          <div class="self-praises-card-container q-mb-xl q-pb-xl">
            <?php get_template_part('/components/front-page/desktop/SelfPraiseCard') ?>
          </div>
        </div>
      </div>
      <!-- کانتینر تبلت -->
      <div class="container" v-if="$q.screen.sm">
        <div class="text-center q-py-lg">
          <h2 class="text-h3 text-secondary text-weight-900">خدمات <span
              class="text-primary text-weight-900">وبیدا</span></h2>
        </div>
        <div class="services-card-container q-gutter-y-xl">
          <?php get_template_part('/components/front-page/tablet/ServicesCard') ?>
        </div>

        <div class="text-center q-mt-md">
          <h2 class="text-h3 text-secondary text-weight-900 q-pt-xl q-pb-lg">چرا مسئولیت طراحی سایت خود را به <span
              class="text-primary text-weight-900">وبیدا</span> بسپاریم</h2>

          <div class="self-praises-card-container q-gutter-y-xl q-mb-xl q-pb-xl">
            <?php get_template_part('/components/front-page/tablet/SelfPraiseCard') ?>
          </div>
        </div>
      </div>
    </q-page>
  </q-page-container>
  </q-layout>


  <?php get_footer(); ?>