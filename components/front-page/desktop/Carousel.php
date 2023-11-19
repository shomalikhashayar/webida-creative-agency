<q-carousel v-model="slide" transition-prev="jump-right" infinite @mouseenter="autoplay = false"
  @mouseleave="autoplay = true" transition-next="jump-left" swipeable :autoplay="autoplay" animated
  control-color="primary" navigation transition-duration="1000" arrows height="600px">
  <q-carousel-slide :name="1" class="flex justify-center items-center webida-accent">
    <div class="container row">
      <div class="col row justify-between">
        <div class="row">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/R.I.P.svg" alt="" style="width:200px">
          <h1 style="width:350px; line-height: 99px;" class="animate-characters q-pl-md text-weight-900 text-secondary">
            آژانس خلاقیت وبیدا</h1>
        </div>
      </div>
      <div class="col row items-center">
        <div class="row">
          <h2 class="text-h3 text-secondary">خدمات طراحی وب‌سایت حرفه‌ای برای تحول حضور آنلاین شما - امروز کسب‌وکارتان
            را رشد دهید!</h2>
          <p class="text-h4 text-weight-900 text-primary">در وبیدا به شما خلاقیت هدیه می‌دهیم.</p>
        </div>
      </div>
    </div>
  </q-carousel-slide>
  <q-carousel-slide :name="2" class="row items-center bg-accent">
    <div class="container column items-center" style="margin-bottom:54px">
      <div class="text-h3 text-secondary text-weight-900 no-letter-spacing q-mb-lg">تازه از تنور دراومده</div>
      <div class="carousel-post-container">
        <?php
        $args = array(
          'numberposts' => 3,
          'order' => 'DESC',
        );

        $latest_posts = get_posts($args);

        foreach ($latest_posts as $post) {
          setup_postdata($post);
          echo get_template_part('components/front-page/desktop/PostCard');
        }
        ?>

      </div>


    </div>
  </q-carousel-slide>
</q-carousel>