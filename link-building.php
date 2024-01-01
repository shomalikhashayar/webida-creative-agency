<?php

// Template Name: Link Building

?>

<?php
get_header();
?>

<q-layout :view="rightLayout" v-if="$q.screen.xs">
   <?php get_template_part('/layouts/mobile/MainLayout'); ?>
   <q-page-container>
      <q-page>
         <?php get_template_part('/components/link-building/mobile/HeroSection'); ?>
         <?php get_template_part('/components/link-building/mobile/linkBuildingAdvantagesSection'); ?>
         <?php get_template_part('/components/link-building/mobile/typeOfLinkBuildingSection'); ?>
         <?php get_template_part('/components/link-building/mobile/FAQ'); ?>
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
            <?php get_template_part('/components/link-building/desktop/HeroSection'); ?>
            <?php get_template_part('/components/link-building/desktop/linkBuildingAdvantagesSection'); ?>
            <?php get_template_part('/components/link-building/desktop/typeOfLinkBuildingSection'); ?>
            <?php get_template_part('/components/link-building/desktop/FAQ'); ?>
         </template>

         <template v-if="$q.screen.sm">
            <?php get_template_part('/components/link-building/mobile/HeroSection'); ?>
            <?php get_template_part('/components/link-building/mobile/linkBuildingAdvantagesSection'); ?>
            <?php get_template_part('/components/link-building/mobile/typeOfLinkBuildingSection'); ?>
            <?php get_template_part('/components/link-building/mobile/FAQ'); ?>
         </template>
      </q-page>
   </q-page-container>
</q-layout>


<?php get_footer(); ?>