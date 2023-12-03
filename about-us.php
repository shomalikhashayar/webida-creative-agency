<?php

// Template Name: About Us

?>

<?php
get_header();
?>

<q-layout :view="rightLayout" class="gt-sm" v-if="$q.screen.gt.sm">
   <?php get_template_part('/layouts/desktop/MainLayout'); ?>
   <q-page-container>
      <q-page>


         <div class="bg-accent">
            <div class="container about-us-hero row items-center">
               <div class="row q-gutter-x-xl items-center">
                  <div class="col">
                     <h2 class="text-h2 no-margin text-weight-900 text-secondary">وبیدا را بهتر بشناسید
                     </h2>
                     <p class="no-letter-spacing text-body1 text-weight-400 line-height-sm text-dark">ما در
                        وبیدا، تضمین می‌کنیم که
                        با
                        ایمان به توانایی‌ها و همت افراد تیم، با انگیزه‌ای بی‌پایان برای بهبود و رشد، مبارزه
                        خواهیم کرد. در این سفر پراز انگیزه، هیچ تلاشی فرو نمی‌گیرد. تعهد به بهترین بودن، خلق
                        خدمات بهتر و تکمیلی‌تر برای کاربران، و طراحی راهبردهای نوآورانه، وظیفه ماست.
                     </p>
                  </div>
                  <div class="col">

                     <img class="fit"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/about-us-hero-elements.svg"
                        alt="">
                  </div>
               </div>
            </div>
         </div>


         <div class="flex justify-between  items-center webida-primary">
            <div class="container" style="width:1140px;">
               <h2 class="text-white text-weight-900 text-h4 text-center q-pt-lg q-pb-lg">اعضای تیم ما</h2>

               <div class="row q-gutter-x-xl justify-center q-mb-xl">

                  <div style="width:178px;">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fatemehnilchi.png" alt=""
                        style="width:178px;">
                     <h2 class="text-white text-weight-500 text-body3 text-center ">فاطمه نیلچی</h2>
                  </div>

                  <div style="width:178px;">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/khashayarshomali.png" alt=""
                        style="width:178px;">
                     <h2 class="text-white text-weight-500 text-body3 text-center ">خشایار شمالی</h2>
                  </div>

                  <div style="width:178px;">
                     <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/mohammadhoseinkhanmohammadi.png"
                        alt="" style="width:178px;">
                     <h2 class="text-white text-weight-500 text-body3 text-center ">محمد حسین خان‌محمدی</h2>
                  </div>
               </div>


               <div class="row q-gutter-y-xl q-mb-xl q-pb-xl">
                  <div class="row q-gutter-x-xl  q-pt-xl">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/khashayarshomali.png" alt=""
                        style="width:250px;">
                     <div class="row content-center q-gutter-md" style="width:650px;">
                        <h4 class="text-h4 q-ma-none text-weight-900 text-white"> وبیدا، جایی است که ایده‌های
                           خلاقانه به واقعیت می‌پیوندند
                        </h4>
                        <p class="text-h6 text-weight-400 text-white">مهمترین اصل ما، مشتریانمان هستند. ما به
                           تنهایی موفق نیستیم، بلکه با تیمی از مشتریان، همراهان و همکارانی که به ما اعتماد
                           کرده‌اند، اینجا هستیم.
                     </div>
                  </div>
                  <div class="row q-gutter-x-xl q-pt-xl">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fatemehnilchi.png" alt=""
                        style="width:250px;">
                     <div class="row content-center q-gutter-md" style="width:650px;">
                        <h4 class="text-h4 q-ma-none text-weight-900 text-white"> با ما تماس بگیرید، مشتاق شنیدن
                           صدایتان هستیم

                        </h4>
                        <p class="text-h6 text-weight-400 text-white"> در هر زمان که تمایل داشتید می‌توانید با
                           ما تماس بگیرید و در هر زمینه که سوال داشتید از ما کمک بخواهید. مسیر ارتباطی با ما
                           همواره باز است.

                     </div>
                  </div>
                  <div class="row q-gutter-x-xl q-pt-xl">
                     <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/mohammadhoseinkhanmohammadi.png"
                        alt="" style="width:250px;">
                     <div class="row content-center q-gutter-md" style="width:650px;">
                        <h4 class="text-h4 q-ma-none text-weight-900 text-white">صرفا فقط خدمات نیست!
                        </h4>
                        <p class="text-h6 text-weight-400 text-white"> از همان روزهای نخست دغدغه این را داشتیم
                           تا به
                           ارتقای دنیای وب و مارکتینگ ایران کمک کنیم، به بلاگ ما سر بزنید و از محتوای با کیفیت
                           رایگان لذت ببرید.
                     </div>
                  </div>
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
         <div class="bg-accent">
            <div class="container about-us-hero q-gutter-y-xl  row justify-center">
               <h2 class="text-h2 q-mb-none q-mt-xl text-weight-900  text-secondary">وبیدا را بهتر بشناسید
               </h2>
               <img class="fit"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/about-us-hero-elements.svg" alt="">
               <p class="no-letter-spacing text-body1 text-center text-weight-400 line-height-sm text-dark">ما در
                  وبیدا، تضمین می‌کنیم که
                  با
                  ایمان به توانایی‌ها و همت افراد تیم، با انگیزه‌ای بی‌پایان برای بهبود و رشد، مبارزه
                  خواهیم کرد. در این سفر پراز انگیزه، هیچ تلاشی فرو نمی‌گیرد. تعهد به بهترین بودن، خلق
                  خدمات بهتر و تکمیلی‌تر برای کاربران، و طراحی راهبردهای نوآورانه، وظیفه ماست.
               </p>
            </div>
         </div>

         <div class="flex justify-between  items-center webida-primary">
            <div class="container">
               <h2 class="text-white text-weight-900 text-h4 text-center q-pt-sm q-pb-lg">اعضای تیم ما</h2>
               <div class="row q-gutter-x-xs  align-center justify-center q-mb-xl">
                  <div class="row justify-center" style="width:100px;">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fatemehnilchi.png" alt=""
                        style="width:72px;">
                     <h2 class="text-white text-weight-500 text-caption-sm text-center ">فاطمه نیلچی</h2>
                  </div>
                  <div class="row justify-center" style="width:100px;">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/khashayarshomali.png" alt=""
                        style="width:72px;">
                     <h2 class="text-white text-weight-500 text-caption-sm text-center ">خشایار شمالی</h2>
                  </div>
                  <div class="row justify-center" style="width:100px;">
                     <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/mohammadhoseinkhanmohammadi.png"
                        alt="" style="width:72px;">
                     <h2 class="text-white text-weight-500 text-caption-sm text-center ">محمد خان‌محمدی</h2>
                  </div>
               </div>
               <div class="row q-gutter-y-xl q-mb-xl">
                  <div class="column items-center  q-gutter-y-md q-px-sm">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/khashayarshomali.png" alt=""
                        style="width:150px;">
                     <h4 class="text-h4 q-ma-none text-weight-900 text-center text-white q-mt-lg">
                        وبیدا، جایی
                        است که ایده‌های
                        خلاقانه به واقعیت می‌پیوندند
                     </h4>
                     <p class="text-h6 text-weight-400 text-center text-white">
                        مهمترین اصل ما، مشتریانمان هستند.
                        ما به
                        تنهایی موفق نیستیم، بلکه با تیمی از مشتریان، همراهان و همکارانی که به ما اعتماد
                        کرده‌اند، اینجا هستیم.
                  </div>
                  <div class="column items-center  q-gutter-y-md q-px-sm">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fatemehnilchi.png" alt=""
                        style="width:150px;">
                     <h4 class="text-h4 q-ma-none text-weight-900 text-center text-white q-mt-lg">
                        وبیدا، جایی
                        است که ایده‌های
                        خلاقانه به واقعیت می‌پیوندند
                     </h4>
                     <p class="text-h6 text-weight-400 text-center text-white">
                        در هر زمان که تمایل داشتید می‌توانید با ما تماس بگیرید و در هر زمینه که سوال داشتید از
                        ما کمک بخواهید. مسیر ارتباطی با ما همواره باز است.
                  </div>
                  <div class="column items-center q-gutter-y-md q-px-sm">
                     <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/mohammadhoseinkhanmohammadi.png"
                        alt="" style="width:150px;">
                     <h4 class="text-h4 q-ma-none text-weight-900 text-center text-white q-mt-lg">
                        صرفا فقط خدمات نیست!

                     </h4>
                     <p class="text-h6 text-weight-400 text-center text-white">
                        از همان روزهای نخست دغدغه این را داشتیم
                        تا به
                        ارتقای دنیای وب و مارکتینگ ایران کمک کنیم، به بلاگ ما سر بزنید و از محتوای با کیفیت
                        رایگان لذت ببرید.
                  </div>
               </div>
            </div>
         </div>

      </q-page>
   </q-page-container>
</q-layout>











<q-layout :view="rightLayout" class="sm" v-if="$q.screen.sm">
   <?php get_template_part('/layouts/mobile/MainLayout'); ?>
   <q-page-container>
      <q-page>

         <div class="bg-accent">
            <div class="container about-us-hero q-gutter-y-xl  row justify-center">
               <h2 class="text-h2 q-mb-none q-mt-xl text-weight-900  text-secondary">وبیدا را بهتر بشناسید
               </h2>
               <img class="fit"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/about-us-hero-elements.svg" alt="">
               <p class="no-letter-spacing text-body1 text-center text-weight-400 line-height-sm text-dark">ما در
                  وبیدا، تضمین می‌کنیم که
                  با
                  ایمان به توانایی‌ها و همت افراد تیم، با انگیزه‌ای بی‌پایان برای بهبود و رشد، مبارزه
                  خواهیم کرد. در این سفر پراز انگیزه، هیچ تلاشی فرو نمی‌گیرد. تعهد به بهترین بودن، خلق
                  خدمات بهتر و تکمیلی‌تر برای کاربران، و طراحی راهبردهای نوآورانه، وظیفه ماست.
               </p>
            </div>
         </div>

         <div class="flex justify-between  items-center webida-primary">
            <div class="container">
               <h2 class="text-white text-weight-900 text-h4 text-center q-pt-lg q-pb-lg">اعضای تیم ما</h2>

               <div class="row q-gutter-x-xl justify-center q-mb-xl">

                  <div style="width:150px;">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fatemehnilchi.png" alt=""
                        style="width:150px;">
                     <h2 class="text-white text-weight-500 text-body3 text-center ">فاطمه نیلچی</h2>
                  </div>

                  <div style="width:150px;">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/khashayarshomali.png" alt=""
                        style="width:150px;">
                     <h2 class="text-white text-weight-500 text-body3 text-center ">خشایار شمالی</h2>
                  </div>

                  <div style="width:150px;">
                     <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/mohammadhoseinkhanmohammadi.png"
                        alt="" style="width:150px;">
                     <h2 class="text-white text-weight-500 text-body3 text-center ">محمد حسین خان‌محمدی</h2>
                  </div>
               </div>




               <div class="row q-gutter-y-xl q-mb-xl q-py-xl">
                  <div class="row q-gutter-x-xl">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/khashayarshomali.png" alt=""
                        style="width: 180px; height: 180px;">
                     <div class="row content-center q-gutter-y-md" style="flex: 1;">
                        <h4 class="text-h4 q-ma-none text-weight-900 text-white"> 
                           وبیدا، جایی است که ایده‌های
                           خلاقانه به واقعیت می‌پیوندند
                        </h4>
                        <p class="text-h6 text-weight-400 text-white">
                           مهمترین اصل ما، مشتریانمان هستند. ما به
                           تنهایی موفق نیستیم، بلکه با تیمی از مشتریان، همراهان و همکارانی که به ما اعتماد
                           کرده‌اند، اینجا هستیم.
                     </div>
                  </div>
                  <div class="row q-gutter-x-xl">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fatemehnilchi.png" alt=""
                        style="width: 180px; height: 180px;">
                     <div class="row content-center q-gutter-y-md" style="flex: 1;">
                        <h4 class="text-h4 q-ma-none text-weight-900 text-white"> 
                           
                        با ما تماس بگیرید، مشتاق شنیدن
                           صدایتان هستیم

                        </h4>
                        <p class="text-h6 text-weight-400 text-white">

                        در هر زمان که تمایل داشتید می‌توانید با
                           ما تماس بگیرید و در هر زمینه که سوال داشتید از ما کمک بخواهید. مسیر ارتباطی با ما
                           همواره باز است.

                     </div>
                  </div>
                  <div class="row q-gutter-x-xl">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mohammadhoseinkhanmohammadi.png" alt=""
                        style="width: 180px; height: 180px;">
                     <div class="row content-center q-gutter-y-md" style="flex: 1;">
                        <h4 class="text-h4 q-ma-none text-weight-900 text-white"> 
                          
                        صرفا فقط خدمات نیست!
                        </h4>
                        <p class="text-h6 text-weight-400 text-white">
                           
                        از همان روزهای نخست دغدغه این را داشتیم
                           تا به
                           ارتقای دنیای وب و مارکتینگ ایران کمک کنیم، به بلاگ ما سر بزنید و از محتوای با کیفیت
                           رایگان لذت ببرید.
                     </div>
                  </div>

               </div>
            </div>
         </div>

      </q-page>
   </q-page-container>
</q-layout>

<?php get_footer(); ?>