<?php
get_header();
?>

<body <?php body_class(); ?>>
  <q-layout :view="rightLayout">
    <div class="container">
      <?php get_template_part('layouts/MainLayout'); ?>
    </div>
    <q-page-container>
      <q-page>
        <?php get_template_part('components/Carousel') ?>

        <div class="container">

          <div class="text-center q-py-lg">
            <h2 class="text-h2 text-secondary text-weight-900">خدمات <span
                class="text-primary text-weight-900">وبیدا</span></h2>
          </div>

          <div class="row items-center justify-between q-gutter-y-xl">
            <service-card title="طراحی سایت" description="هویت برندتان را در دنیای دیجیتال به نمایش بگذارید"
              img="http://localhost/webida/wp-content/uploads/2023/10/webida-website-design.svg"></service-card>
            <service-card title="سئو سایت" description="سئو = بازدید کننده بیشتر = رتبه بندی بهتر = فروش بیشتر"
              img="http://localhost/webida/wp-content/uploads/2023/10/webida-seo.svg"></service-card>
            <service-card title="خدمات تولید محتوا"
              description="مقالات تخصصی و آموزشی، محتوای وبسایت، بلاگ پست، ویدئو و سوشال مدیا"
              img="http://localhost/webida/wp-content/uploads/2023/10/webida-content-produce.svg"></service-card>
            <service-card title="لینک‌سازی و خرید بک لینک"
              description="جذب ترافیک هدفمند، بهبود دیده شدن در نتایج جستجو و افزایش اعتبار وبسایت"
              img="http://localhost/webida/wp-content/uploads/2023/10/webida-link-building.svg"></service-card>
            <service-card title="طراحی رابط و تجربه کاربری"
              description="سفری به دنیای رابط کاربری: جاذبه‌ای نوآورانه برای همهٔ تجربه‌ها"
              img="http://localhost/webida/wp-content/uploads/2023/10/webida-user-interface-design.svg"></service-card>
            <service-card title="تبلیغات بنری"
              description="بنرهای خلاقانه‌تر برای تبلیغاتتان افزایش فروش شما را در بر خواهد داشت."
              img="http://localhost/webida/wp-content/uploads/2023/10/webida-banner-advertising.svg"></service-card>

          </div>

          <div class="container text-center q-mt-md">
            <h2 class="text-h2 text-secondary text-weight-900 q-pt-xl q-pb-lg">چرا مسئولیت طراحی سایت خود را به <span
                class="text-primary text-weight-900">وبیدا</span> بسپاریم</h2>

            <div class="flex justify-between items-center q-gutter-y-xl q-mb-xl q-pb-xl">
              <self-praise-card title="سال‌ها تجربه در اختیار شماست" icon="o_pattern"></self-praise-card>
              <self-praise-card title="در وردپرس متخصص هستیم" icon="o_kid_star"></self-praise-card>
              <self-praise-card title="اختصاصی طراحی می‌کنیم" icon="o_format_paint"></self-praise-card>
              <self-praise-card title="واکنشگرا طراحی می‌کنیم" icon="o_phone_android"></self-praise-card>
              <self-praise-card title="به موقع تحویل می‌دهیم" icon="o_work_history"></self-praise-card>
              <self-praise-card title="تا پایان پروژه مشاورتان هستیم"
                icon="o_supervised_user_circle"></self-praise-card>
            </div>
            <?php get_template_part('components/BackToTop') ?>
    </q-page-container>
  </q-layout>
  <?php get_footer(); ?>