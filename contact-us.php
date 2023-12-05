<?php

// Template Name: Contact Us

?>

<?php
get_header();
?>

<q-layout :view="rightLayout" class="xs" v-if="$q.screen.xs">
  <?php get_template_part('/layouts/mobile/MainLayout'); ?>
  <q-page-container>
    <q-page>
      <?php get_template_part('/components/contact-us/mobile/HeroSection'); ?>
      <?php get_template_part('/components/contact-us/mobile/ContactSection'); ?>
    </q-page>
  </q-page-container>
</q-layout>

<q-layout :view="rightLayout" class="sm" v-if="$q.screen.sm">
  <?php get_template_part('/layouts/tablet/MainLayout'); ?>
  <q-page-container>
    <q-page>
      <?php get_template_part('/components/contact-us/tablet/HeroSection'); ?>
      <?php get_template_part('/components/contact-us/mobile/ContactSection'); ?>
    </q-page>
  </q-page-container>
</q-layout>

<q-layout :view="rightLayout" class="md" v-if="$q.screen.md">
  <?php get_template_part('/layouts/laptop/MainLayout'); ?>
  <q-page-container>
    <q-page>
      <?php get_template_part('/components/contact-us/desktop/HeroSection'); ?>
      <?php get_template_part('/components/contact-us/desktop/ContactSection'); ?>

    </q-page>
  </q-page-container>
</q-layout>

<q-layout :view="rightLayout" class="gt-md" v-if="$q.screen.gt.md">
  <?php get_template_part('/layouts/desktop/MainLayout'); ?>
  <q-page-container>
    <q-page>
      <?php get_template_part('/components/contact-us/desktop/HeroSection'); ?>
      <?php get_template_part('/components/contact-us/desktop/ContactSection'); ?>

    </q-page>
  </q-page-container>
</q-layout>

<?php get_footer(); ?>