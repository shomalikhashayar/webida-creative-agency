<?php
get_header();
?>

<body <?php body_class(); ?>>
<q-layout :view="rightLayout" class="main-layout">
<?php get_template_part('layouts/MainLayout'); ?>
<q-page-container>
    <q-page>
    <q-carousel
      v-model="slide"
      transition-prev="slide"
        transition-next="slide"
        swipeable
        animated
        control-color="primary"
        navigation
        padding
        transition-duration="600"
        arrows
        height="600px"
      class="text-white"
    >
      <q-carousel-slide name="style" class="flex q-pt-md justify-center items-center webida-accent">
        <div class="row q-gutter-xl">
          <div class="col row">
          <div class="row q-gutter-x-md">
          <img src="http://localhost/webida/wp-content/uploads/2023/10/R.I.P.svg" alt=""
            style="width:250px">
            <h1 style="width:300px" class="text-weight-900 text-size-42 text-secondary">آژانس خلاقیت وبیدا</h1>
          </div>
          </div>
          <div class="col row items-center">
            <div class="row" style="width:700px">
            <h2 class="text-h1 text-secondary">خدمات طراحی وب‌سایت حرفه‌ای برای تحول حضور آنلاین شما - امروز کسب‌وکارتان را رشد دهید!</h2>
            <p class="text-h3 text-weight-900 text-primary">در وبیدا به شما خلاقیت هدیه می‌دهیم.</p>
            </div>
          </div>
          </div>
      </q-carousel-slide>
      <q-carousel-slide name="tv" class="column no-wrap flex-center">
        <q-icon name="live_tv" size="56px" />
        <div class="q-mt-md text-center">
        first slidegggggggggggggggggggg
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
    <q-card>
      <h1>hello from quasar</h1>
    </q-card>

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
    
