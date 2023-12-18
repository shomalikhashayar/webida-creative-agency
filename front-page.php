<?php get_header(); ?>

<body>
   <!-- لایه موبایل -->
   <q-layout :view="rightLayout" v-if="$q.screen.xs">
      <?php get_template_part('/layouts/mobile/MainLayout'); ?>
      <q-page-container>
         <q-page>
            <?php get_template_part('/components/front-page/mobile/HeroSection'); ?>
            <?php get_template_part('components/front-page/mobile/ServicesCard'); ?>
            <?php get_template_part('components/front-page/mobile/SelfPraiseCard'); ?>
         </q-page>
      </q-page-container>
   </q-layout>



   <!-- لایه دسکتاپ و تبلت  -->
   <q-layout :view="rightLayout" v-if="$q.screen.gt.xs">
      <!-- هدر و فوتر تبلت -->
      <div v-if="$q.screen.sm">
         <?php get_template_part('/layouts/tablet/MainLayout'); ?>
      </div>
      <!-- هدر و فوتر دسکتاپ -->
      <div v-if="$q.screen.gt.sm">
         <?php get_template_part('/layouts/desktop/MainLayout'); ?>
      </div>

      <q-page-container>
         <q-page>
            <!-- صفحه لپتاپ و دسکتاپ -->
            <template v-if="$q.screen.gt.sm">
               <?php get_template_part('components/front-page/desktop/Carousel'); ?>
               <?php get_template_part('/components/front-page/desktop/ServicesCard'); ?>
               <?php get_template_part('/components/front-page/desktop/SelfPraiseCard') ?>
            </template>
            <!-- صفحه تبلت -->
            <template v-if="$q.screen.sm">
               <?php get_template_part('/components/front-page/tablet/HeroSection') ?>
               <?php get_template_part('/components/front-page/tablet/ServicesCard') ?>
               <?php get_template_part('/components/front-page/tablet/SelfPraiseCard') ?>
            </template>
         </q-page>
      </q-page-container>
   </q-layout>

   <?php get_footer(); ?>