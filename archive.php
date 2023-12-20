<?php get_header(); ?>

<body <?php body_class(); ?>>

  <q-layout :view="rightLayout" class="xs" v-if="$q.screen.xs">
    <?php get_template_part('/layouts/mobile/MainLayout'); ?>
    <q-page-container class="bg-white">
      <q-page>
        <?php get_template_part('components/archive/mobile/ArchiveContent'); ?>
      </q-page>
    </q-page-container>
  </q-layout>


  <q-layout :view="rightLayout" v-if="$q.screen.gt.xs">
    <!-- هدر و فوتر تبلت -->
    <div v-if="$q.screen.sm">
      <?php get_template_part('/layouts/tablet/MainLayout'); ?>
    </div>
    <!-- هدر و فوتر دسکتاپ -->
    <div v-if="$q.screen.gt.sm">
      <?php get_template_part('/layouts/desktop/MainLayout'); ?>
    </div>
    <q-page-container class="bg-white">
      <q-page>
        <?php get_template_part('components/archive/desktop/ArchiveContent'); ?>
      </q-page>
    </q-page-container>
  </q-layout>

  <?php get_footer(); ?>