<?php

// Template Name: Contact Us

?>

<?php
get_header();
?>

<q-layout :view="rightLayout" class="gt-sm" v-if="$q.screen.gt.sm">
  <?php get_template_part('/layouts/desktop/MainLayout'); ?>
  <q-page-container>
    <q-page>
      <div class="bg-accent">
        <div class="container contact-us-hero row items-center">
          <img style="width:220px" src="<?php echo get_template_directory_uri(); ?>/assets/images/radio.png" alt="">
          <div class="q-ml-xl" style="width: 600px">
            <h1 class="q-pb-lg no-line-height no-letter-spacing text-h2 text-weight-900 text-secondary">تماس با وبیدا
            </h1>
            <h2 class="line-height-sm no-letter-spacing text-h6 text-weight-700 text-dark">
              تیم وبیدا، صمیمانه تمایل دارد انتقادات و پیشنهادات سازنده شما را دریافت کند.
            </h2>
            <p class="line-height-sm no-letter-spacing text-body1 text-weight-500 text-primary">
              یک دکمه در گوشه راست سایت مشاهده می‌کنید که می‌توانید با کلیک بر روی آن با ما به صورت آنلاین ارتباط برقرار
              کنید.
            </p>
          </div>
        </div>
      </div>
    </q-page>
  </q-page-container>
</q-layout>

<q-layout :view="rightLayout" class="xs" v-if="$q.screen.xs">
  <?php get_template_part('/layouts/mobile/MainLayout'); ?>
  <q-page-container>
    <q-page>
      <div class="bg-accent q-pt-lg">
        <div class="container contact-us-hero column items-center q-gutter-y-lg">
          <h1 class="q-pb-lg no-line-height no-letter-spacing text-h2 text-weight-900 text-secondary">تماس با وبیدا</h1>
          <img style="width:150px" src="<?php echo get_template_directory_uri(); ?>/assets/images/radio.png" alt="">
          <h2 class="q-pt-md text-center line-height-sm no-letter-spacing text-h6 text-weight-700 text-dark">
            تیم وبیدا، صمیمانه تمایل دارد انتقادات و پیشنهادات سازنده شما را دریافت کند.
          </h2>
          <p class="text-center line-height-sm no-letter-spacing text-body1 text-weight-500 text-primary">
            یک دکمه در گوشه راست سایت مشاهده می‌کنید که می‌توانید با کلیک بر روی آن با ما به صورت آنلاین ارتباط برقرار
            کنید.
          </p>
        </div>
      </div>
    </q-page>
  </q-page-container>
</q-layout>


<?php get_footer(); ?>