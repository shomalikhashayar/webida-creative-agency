<?php

// Template Name: Seo

?>

<?php
get_header();
?>
<!-- لایه موبایل -->
<q-layout :view="rightLayout" v-if="$q.screen.xs">
   <?php get_template_part('/layouts/mobile/MainLayout'); ?>
   <q-page-container>
      <q-page>
         <?php get_template_part('/components/seo/mobile/HeroSection'); ?>
         <?php get_template_part('/components/seo/mobile/contentSection'); ?>
         <?php get_template_part('/components/seo/desktop/advantagesSection'); ?>
         <?php get_template_part('/components/seo/mobile/consultationSection'); ?>
         <?php get_template_part('/components/seo/mobile/FAQ'); ?>
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
         <div v-if="$q.screen.gt.sm">
            <?php get_template_part('/components/seo/desktop/HeroSection'); ?>
            <?php get_template_part('/components/seo/desktop/contentSection'); ?>
            <?php get_template_part('/components/seo/desktop/advantagesSection'); ?>
            <?php get_template_part('/components/seo/desktop/consultationSection'); ?>
            <?php get_template_part('/components/seo/desktop/FAQ'); ?>
         </div>
         <!-- صفحه تبلت -->
         <div v-if="$q.screen.sm">
            <?php get_template_part('/components/seo/mobile/HeroSection'); ?>
            <?php get_template_part('/components/seo/mobile/contentSection'); ?>
            <?php get_template_part('/components/seo/desktop/advantagesSection'); ?>
            <?php get_template_part('/components/seo/mobile/consultationSection'); ?>
            <?php get_template_part('/components/seo/mobile/FAQ'); ?>
         </div>
      </q-page>
   </q-page-container>
</q-layout>


<?php get_footer(); ?>