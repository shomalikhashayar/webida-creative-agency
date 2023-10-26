<?php
get_header();
?>

<body <?php body_class(); ?>>
<q-layout :view="rightLayout">
<?php get_template_part('layouts/MainLayout'); ?>
<q-page-container>
    <q-page class="webida-accent">
    <q-carousel
      v-model="slide"
      transition-prev="scale"
        transition-next="scale"
        swipeable
        animated
        control-color="white"
        navigation
        padding
        arrows
        height="500px"
      class="bg-purple text-white"
    >
      <q-carousel-slide name="style" class="column no-wrap flex-center bg-brand">
        <div class="row q-mt-md justify-center">
          <h1 class="font-weight-900 text-h6">
          خدمات طراحی وب‌سایت حرفه‌ای برای تحول حضور آنلاین شما - امروز کسب‌وکارتان را رشد دهید!
          </h1>
        </div>
      </q-carousel-slide>
      <q-carousel-slide name="tv" class="column no-wrap flex-center">
        <q-icon name="live_tv" size="56px" />
        <div class="q-mt-md text-center">
        first slide
        </div>
      </q-carousel-slide>
      <q-carousel-slide name="layers" class="column no-wrap flex-center">
        <q-icon name="layers" size="56px" />
        <div class="q-mt-md text-center">
        first slide
        </div>
      </q-carousel-slide>
      <q-carousel-slide name="map" class="column no-wrap flex-center">
        <q-icon name="terrain" size="56px" />
        <div class="q-mt-md text-center">
        first slide
        </div>
      </q-carousel-slide>
    </q-carousel>

    <?php

$menu_items = wp_get_nav_menu_items('main menu');

foreach ($menu_items as $menu_item) {
  $menu_item_id = $menu_item->ID;
  $menu_item_title = $menu_item->title;
  $menu_item_url = $menu_item->url;

  echo "<a href='$menu_item_url'>$menu_item_title</a><br>";
}
    
    ?>
    
    </q-page>
    <?php get_template_part('components/backToTop'); ?>
</q-page-container>
</q-layout>
<?php get_footer(); ?>
    
