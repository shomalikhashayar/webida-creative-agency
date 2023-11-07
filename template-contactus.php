<?php

// Template Name: Contact Us Template

?>

<?php
get_header();
?>

  <q-layout :view="rightLayout">
   <?php get_template_part('layouts/MainLayout'); ?>
 <q-page-container>
  <q-page>
  <?php get_template_part('components/Carousel')?>
  <?php get_template_part('components/Carousel')?>
    </q-page>
 </q-page-container>
 </q-layout>
  <?php get_footer(); ?>