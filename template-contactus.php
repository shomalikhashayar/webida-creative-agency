<?php

// Template Name: Contact Us Template

?>

<?php
get_header();
?>

  <q-layout :view="rightLayout">
   <?php get_template_part('layouts/MainLayout'); ?>
   <div class="text-h6"><?php the_title(); ?></div>
  <?php get_template_part('includes/section','content'); ?>
 <q-page-container>
  <q-page>
  <?php get_template_part('components/backToTop'); ?>
  </q-page>
 </q-page-container>
 </q-layout>
  <?php get_footer(); ?>