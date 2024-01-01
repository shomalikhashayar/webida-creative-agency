<?php

// Template Name: Website Design

?>

<?php
get_header();
?>

<q-layout :view="rightLayout" v-if="$q.screen.xs">
   <?php get_template_part('/layouts/mobile/MainLayout'); ?>
   <q-page-container>
      <q-page>
         <?php get_template_part('/components/website-design/mobile/HeroSection'); ?>
         <?php get_template_part('/components/website-design/mobile/contentSection'); ?>
         <?php get_template_part('/components/website-design/mobile/FAQ'); ?>
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

         <div v-if="$q.screen.gt.sm">
            <?php get_template_part('/components/website-design/desktop/HeroSection'); ?>
            <?php get_template_part('/components/website-design/desktop/contentSection'); ?>
            <?php get_template_part('/components/website-design/desktop/FAQ'); ?>
         </div>

         <div v-if="$q.screen.sm">
            <?php get_template_part('/components/website-design/tablet/HeroSection'); ?>
            <?php get_template_part('/components/website-design/mobile/contentSection'); ?>
            <?php get_template_part('/components/website-design/mobile/FAQ'); ?>
         </div>
      </q-page>
   </q-page-container>
</q-layout>


<?php get_footer(); ?>