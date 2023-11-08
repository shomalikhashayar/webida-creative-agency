<q-carousel v-model="slide" transition-prev="jump-right" infinite @mouseenter="autoplay = false"
  @mouseleave="autoplay = true" transition-next="jump-left" swipeable :autoplay="autoplay" animated control-color="primary"
  navigation transition-duration="1000" arrows height="600px">
  <q-carousel-slide :name="1" class="flex justify-center items-center webida-accent">
    <div class="container row">
      <div class="col row justify-between">
        <div class="row">
          <img src="http://localhost/webida/wp-content/uploads/2023/10/R.I.P.svg" alt="" style="width:200px">
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
  <q-carousel-slide :name="2" class="row items-center bg-circle">
    <div class="container row">

      <div class="row carousel-post-container">
        <?php
        $args = array(
          'numberposts' => 12,
          'order' => 'DESC',
        );

        $latest_posts = get_posts($args);

        foreach ($latest_posts as $post) {
          setup_postdata($post);
          echo '
        <a class="row no-link-on-hover no-decoration "href="' . get_permalink() . '">
            <q-card style="width: 350px; height: 80px; border: 2px solid var(--q-webida-secondary)" class="row on-hover-primary-1 items-center justify-center q-radius-sm no-shadow">
                <q-card-section>
                    <div class="row line-height-xs no-letter-spacing text-primary-hover text-secondary text-weight-700 text-body2">
                        ' . get_the_title() . '
                    </div>
                </q-card-section>
            </q-card>
        </a>
    ';
        }
        ?>

      </div>


    </div>
  </q-carousel-slide>
</q-carousel>