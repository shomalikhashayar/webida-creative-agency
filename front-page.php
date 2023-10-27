<?php
get_header();
?>

<script>

  const description = 'مقالات تخصصی و آموزشی، محتوای وبسایت، بلاگ پست، ویدئو و سوشال مدیا'
</script>

<body <?php body_class(); ?>>
<q-layout :view="rightLayout" class="main-layout">
<?php get_template_part('layouts/MainLayout'); ?>
<q-page-container>
    <q-page>
    <?php get_template_part('components/Carousel')?>

    <div class="text-center q-py-lg">
    <h2 class="text-h2 text-secondary text-weight-900">خدمات <span class="text-primary text-weight-900">وبیدا</span></h2>
    </div>

    <div class="bg-white items-center">
      <div class="flex justify-center q-gutter-xl">
        <service-card
        title="طراحی سایت"
        description="هویت برندتان را در دنیای دیجیتال به نمایش بگذارید"
        img="http://localhost/webida/wp-content/uploads/2023/10/webida-website-design.svg"
        ></service-card>
        <service-card
        title="سئو سایت"
        description="سئو = بازدید کننده بیشتر = رتبه بندی بهتر = فروش بیشتر"
        img="http://localhost/webida/wp-content/uploads/2023/10/webida-seo.svg"
        ></service-card>
        <service-card
        title="خدمات تولید محتوا"
        description="مقالات تخصصی و آموزشی، محتوای وبسایت، بلاگ پست، ویدئو و سوشال مدیا"
        img="http://localhost/webida/wp-content/uploads/2023/10/webida-content-produce.svg"
        ></service-card>
      </div>
      <div class="flex justify-center q-gutter-xl q-mt-xs">
      <service-card
        title="لینک‌سازی و خرید بک لینک"
        description="جذب ترافیک هدفمند، بهبود دیده شدن در نتایج جستجو و افزایش اعتبار وبسایت"
        img="http://localhost/webida/wp-content/uploads/2023/10/webida-link-building.svg"
        ></service-card>
        <service-card
        title="طراحی رابط و تجربه کاربری"
        description="سفری به دنیای رابط کاربری: جاذبه‌ای نوآورانه برای همهٔ تجربه‌ها"
        img="http://localhost/webida/wp-content/uploads/2023/10/webida-user-interface-design.svg"
        ></service-card>
        <service-card
        title="تبلیغات بنری"
        description="بنرهای خلاقانه‌تر برای تبلیغاتتان افزایش فروش شما را در بر خواهد داشت."
        img="http://localhost/webida/wp-content/uploads/2023/10/webida-banner-advertising.svg"
        ></service-card>  
      </div>
    </div>

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

<style>
  .service-card {

    width:300px;

  }
</style>

<?php get_footer(); ?>
    
