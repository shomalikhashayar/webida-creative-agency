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

    <div class="bg-white q-px-xl">
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
    </div>

    <div class="text-center q-py-lg q-mt-md">
    <h2 class="text-h2 text-secondary text-weight-900">چرا مسئولیت طراحی سایت خود را به <span class="text-primary text-weight-900">وبیدا</span> بسپاریم</h2>
    </div>

    <div class="bg-white q-px-xl">
    <div class="bg-white items-center">
      <div class="flex justify-center q-gutter-xl">
        <self-praise-card title="سال‌ها تجربه در اختیار شماست" icon="o_pattern"></self-praise-card>
        <self-praise-card title="در وردپرس متخصص هستیم" icon="o_kid_star"></self-praise-card>
        <self-praise-card title="اختصاصی طراحی می‌کنیم" icon="o_format_paint"></self-praise-card>
      </div>
      <div class="flex justify-center q-gutter-xl q-mt-xs">
        <self-praise-card title="واکنشگرا طراحی می‌کنیم" icon="o_phone_android"></self-praise-card>
        <self-praise-card title="به موقع تحویل می‌دهیم" icon="o_work_history"></self-praise-card>
        <self-praise-card title="تا پایان پروژه مشاورتان هستیم" icon="o_supervised_user_circle"></self-praise-card>
      </div>
    </div>
    </div>

    <div class="bg-secondary">
      <div class="row">
        <div class="col-2">
          <p class="text-h6 text-weight-900 text-white">دسترسی سریع</p>
          <div class="column q-gutter-xs">
            <div class="row items-center q-gutter-xs">
            <q-icon name="circle" size="8px" class="text-primary"></q-icon><a class="text-white no-decoration" href="<?php echo esc_html(get_site_url()) . '/website-design'; ?>">طراحی سایت</a>
            </div>
            <div class="row items-center q-gutter-xs">
            <q-icon name="circle" size="8px" class="text-primary"></q-icon><a class="text-white no-decoration" href="<?php echo esc_html(get_site_url()) . '/website-design'; ?>">طراحی سایت</a>
            </div>
            <div class="row items-center q-gutter-xs">
            <q-icon name="circle" size="8px" class="text-primary"></q-icon><a class="text-white no-decoration" href="<?php echo esc_html(get_site_url()) . '/website-design'; ?>">طراحی سایت</a>
            </div>
            <div class="row items-center q-gutter-xs">
            <q-icon name="circle" size="8px" class="text-primary"></q-icon><a class="text-white no-decoration" href="<?php echo esc_html(get_site_url()) . '/website-design'; ?>">طراحی سایت</a>
            </div>
          </div>
        </div>
        <div class="col-4"></div>
        <div class="col-3"></div>
        <div class="col-2"></div>
      </div>
    </div>
    </q-page>
    <?php get_template_part('components/backToTop'); ?>
</q-page-container>
</q-layout>
<?php get_footer(); ?>
    
