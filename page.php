<?php
get_header();
?>

<body>
  <!-- <q-card v-for="n in 15" :key="n" class="bg-primary text-white q-ma-md">
    <q-card-section>
      <span class="text-h6">سلام از طرف کویزار دوست داشتنی</span>
    </q-card-section>
    <q-card-actions class="row justify-end">
      <q-btn round>
        <q-icon name="o_person" size="md" />
      </q-btn>
    </q-card-actions>
  </q-card> -->

  <div class="text-h6"><?php the_title(); ?></div>
  <?php get_template_part('includes/section','archive'); ?>

  <?php get_footer(); ?>