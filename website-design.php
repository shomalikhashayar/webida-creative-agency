<?php

// Template Name: Website Design

?>

<?php
get_header();
?>

<q-layout :view="rightLayout" class="gt-sm" v-if="$q.screen.gt.sm">
   <?php get_template_part('/layouts/desktop/MainLayout'); ?>
   <q-page-container>
      <q-page>

         <div class="bg-accent">
            <div class="container website-design-hero row items-center">
               <div style="width:591px;">
                  <h2 class="text-h2 no-margin text-weight-900 text-secondary">
                     سفارش طراحی سایت؛ با ویژگی‌های متمایز از وبیدا </h2>
                  <p class="no-letter-spacing text-body1 q-mt-xl q-mb-lg text-weight-400 line-height-sm text-dark">
                     اینجا طراحی واقعیت می‌شود!
                  </p>
                  <div class="row justify-end">
                     <q-btn @click="ConsultantModal = true" unelevated rounded label="همین حالا سفارش دهید "
                        class="webida-primary text-white text-weight-regular items-end" padding="10px 24px" />
                  </div>
               </div>
            </div>
         </div>

         <div class="bg-white ">
            <div class="container">
               <h2 class="q-mt-xl q-mb-lg text-center text-secondary text-h3 no-letter-spacing text-weight-700">
                  مزایای منحصر به‌ فرد سفارش طراحی سایت از
                  <span class="text-weight-700 text-primary">وبیدا</span>
               </h2>

               <div class="row items-center" style="column-gap: 90px; margin-top:100px;">
                  <div class="col ">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-design-dollar.svg" alt=""
                        style="width:100%;">
                  </div>
                  <div class="col q-gutter-y-sm">
                     <h2 class="text-h4 no-margin text-weight-900 text-secondary">
                        تضمین پایین ترین قیمت طراحی سایت </h2>
                     <p class="no-letter-spacing text-body1 text-weight-400 line-height-sm text-dark">
                        طراحی وب‌سایت را با ما آغاز کنید و از تضمین پایین‌ترین قیمت بهره‌مند شوید! خلق یک حضور آنلاین و
                        کارآمد را با هزینه‌ای کمتر تجربه کنید. </p>
                  </div>
               </div>

               <div class="row items-center" style="column-gap: 90px; margin-top:48px;">
                  <div class="col q-gutter-y-sm">
                     <h2 class="text-h4 no-margin text-weight-900 text-secondary">
                        رابط کاربری ایده‌آل برای تجربه کاربری بی‌نظیر </h2>
                     <p class="no-letter-spacing text-body1 text-weight-400 line-height-sm text-dark">
                        نه تنها از لحاظ عملکردی بلکه از نظر ظاهری هم شگفت‌آور باشید.
                     </p>
                  </div>
                  <div class="col ">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-design-ux.svg" alt=""
                        style="width:100%;">
                  </div>
               </div>

               <div class="row items-center" style="column-gap: 90px; margin-top:17px; margin-bottom: 80px;">
                  <div class="col ">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-design-privecy.svg" alt=""
                        style="width:100%;">
                  </div>
                  <div class="col q-gutter-y-sm">
                     <h2 class="text-h4 no-margin text-weight-900 text-secondary">
                        حریم خصوصی و امنیت اطلاعات </h2>
                     <p class="no-letter-spacing text-body1 text-weight-400 line-height-sm text-dark">
                        با استفاده از رمزنگاری قوی و فناوری‌های امنیتی پیشرفته، اطلاعات محرمانه و مهم وب‌سایت شما تا حد
                        امکان دربرابر دسترسی‌های غیرمجاز محافظت می‌شوند.
                     </p>
                  </div>
               </div>
            </div>
         </div>


         <?php get_template_part('/components/website-design/desktop/FAQ'); ?>
      </q-page>
   </q-page-container>
</q-layout>

<q-layout :view="rightLayout" class="xs" v-if="$q.screen.xs">
   <?php get_template_part('/layouts/mobile/MainLayout'); ?>
   <q-page-container>
      <q-page>
         <?php get_template_part('/components/website-design/mobile/FAQ'); ?>
      </q-page>
   </q-page-container>
</q-layout>


<?php get_footer(); ?>