<?php

// Template Name: Banner Advertising

?>

<?php
get_header();
?>

<q-layout :view="rightLayout" v-if="$q.screen.xs">
   <?php get_template_part('/layouts/mobile/MainLayout'); ?>
   <q-page-container>
      <q-page>
         <?php get_template_part('/components/banner-advertising/mobile/HeroSection'); ?>
         <?php get_template_part('/components/banner-advertising/mobile/whatIsAdvSection'); ?>
         <?php get_template_part('/components/banner-advertising/mobile/gifContentSection'); ?>
         <?php get_template_part('/components/banner-advertising/mobile/FeaturesOfBannerAds'); ?>
         <?php get_template_part('/components/banner-advertising/mobile/FAQ'); ?>
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

   <q-page-container>
      <q-page>

         <template v-if="$q.screen.gt.sm">
            <?php get_template_part('/components/banner-advertising/desktop/HeroSection'); ?>
            <?php get_template_part('/components/banner-advertising/desktop/whatIsAdvSection'); ?>
            <?php get_template_part('/components/banner-advertising/desktop/gifContentSection'); ?>
            <?php get_template_part('/components/banner-advertising/desktop/FeaturesOfBannerAds'); ?>
            <?php get_template_part('/components/banner-advertising/desktop/FAQ'); ?>
         </template>

         <template v-if="$q.screen.sm">
            <?php get_template_part('/components/banner-advertising/mobile/HeroSection'); ?>
            <?php get_template_part('/components/banner-advertising/mobile/whatIsAdvSection'); ?>
            <?php get_template_part('/components/banner-advertising/mobile/gifContentSection'); ?>
            <?php get_template_part('/components/banner-advertising/mobile/FeaturesOfBannerAds'); ?>
            <?php get_template_part('/components/banner-advertising/mobile/FAQ'); ?>
         </template>
      </q-page>
   </q-page-container>
</q-layout>


<?php get_footer(); ?>