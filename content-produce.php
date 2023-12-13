<?php

// Template Name: Content Produce

?>

<?php
get_header();
?>
<!-- لایه موبایل -->
<q-layout :view="rightLayout" v-if="$q.screen.xs">
   <?php get_template_part('/layouts/mobile/MainLayout'); ?>
   <q-page-container>
      <q-page>
         <?php get_template_part('/components/content-produce/mobile/HeroSection'); ?>
         <?php get_template_part('/components/content-produce/mobile/TypesOfContentSection'); ?>
         <?php get_template_part('/components/content-produce/mobile/WhyWebidaSection'); ?>
         <?php get_template_part('/components/content-produce/mobile/FAQ'); ?>
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
            <?php get_template_part('/components/content-produce/desktop/HeroSection'); ?>
            <?php get_template_part('/components/content-produce/desktop/TypesOfContentSection'); ?>
            <?php get_template_part('/components/content-produce/desktop/WhyWebidaSection'); ?>
            <?php get_template_part('/components/content-produce/desktop/FAQ'); ?>
         </template>
         <!-- صفحه تبلت -->
         <template v-if="$q.screen.sm">
            <?php get_template_part('/components/content-produce/mobile/HeroSection'); ?>
            <?php get_template_part('/components/content-produce/mobile/TypesOfContentSection'); ?>
            <?php get_template_part('/components/content-produce/mobile/WhyWebidaSection'); ?>
            <?php get_template_part('/components/content-produce/mobile/FAQ'); ?>
         </template>
      </q-page>
   </q-page-container>
</q-layout>


<?php get_footer(); ?>