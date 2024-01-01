<?php

// Template Name: Contact Us

?>

<?php
get_header();
?>

<q-layout :view="rightLayout" v-if="$q.screen.xs">
  <?php get_template_part('/layouts/mobile/MainLayout'); ?>
  <q-page-container>
    <q-page>
      <?php get_template_part('/components/contact-us/mobile/HeroSection'); ?>
      <?php get_template_part('/components/contact-us/mobile/ContactSection'); ?>
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
        <?php get_template_part('/components/contact-us/desktop/HeroSection'); ?>
        <?php get_template_part('/components/contact-us/desktop/ContactSection'); ?>
      </template>

      <template v-if="$q.screen.sm">
        <?php get_template_part('/components/contact-us/tablet/HeroSection'); ?>
        <?php get_template_part('/components/contact-us/mobile/ContactSection'); ?>
      </template>
    </q-page>
  </q-page-container>
</q-layout>


<?php get_footer(); ?>