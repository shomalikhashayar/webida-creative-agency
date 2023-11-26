<?php

// Template Name: Contact Us

?>

<?php
get_header();
?>

<q-layout :view="rightLayout" class="gt-sm" v-if="$q.screen.gt.sm">
  <?php get_template_part('/layouts/desktop/MainLayout'); ?>
  <q-page-container>
    <q-page>
      <?php get_template_part('/components/contact-us/desktop/HeroSection'); ?>
      <?php get_template_part('/components/contact-us/desktop/ContactSection'); ?>
    
    </q-page>
  </q-page-container>
</q-layout>

<q-layout :view="rightLayout" class="xs" v-if="$q.screen.xs">
  <?php get_template_part('/layouts/mobile/MainLayout'); ?>
  <q-page-container>
    <q-page>
      <?php get_template_part('/components/contact-us/mobile/HeroSection'); ?>
    </q-page>
  </q-page-container>
</q-layout>


<?php get_footer(); ?>