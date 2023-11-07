<q-carousel v-model="slide" transition-prev="jump-right" infinite @mouseenter="autoplay = false"
  @mouseleave="autoplay = true" transition-next="jump-left" swipeable :autoplay="autoplay" animated
  control-color="primary" navigation transition-duration="1000" arrows height="1050px">
  <q-carousel-slide :name="1" class="no-padding text-center flex webida-accent">
    <div class="container column items-center">
      <h1 style="line-height: 99px;" class="animate-characters q-my-xl text-center text-weight-900 text-secondary">آژانس
        خلاقیت وبیدا</h1>
      <div class="row q-gutter-y-md">
        <h2 class="no-margin text-h3 text-secondary">خدمات طراحی وب‌سایت حرفه‌ای برای تحول حضور آنلاین شما - امروز
          کسب‌وکارتان را
          رشد دهید!</h2>
        <p class="text-h4 text-weight-900 text-primary">در وبیدا به شما خلاقیت هدیه می‌دهیم.</p>
      </div>
      <img class="q-mt-md" src="http://localhost/webida/wp-content/uploads/2023/10/R.I.P.svg" alt=""
        style="width:200px">
    </div>
  </q-carousel-slide>
  <q-carousel-slide :name="2" class="column items-center bg-circle no-padding">
    <div class="container column q-gutter-lg q-my-sm">
      <?php
      $args = array(
        'numberposts' => 9,
        'order' => 'DESC',
      );

      $latest_posts = get_posts($args);

      foreach ($latest_posts as $post) {
        setup_postdata($post);
        echo '
        <a class="row no-link-on-hover no-decoration "href="' . get_permalink() . '">
            <q-card style="width: 100%; height: 80px; border: 2px solid var(--q-webida-secondary)" class="row on-hover-primary-1 items-center justify-center q-radius-sm no-shadow">
                <q-card-section>
                    <div class="line-height-xs row no-letter-spacing text-primary-hover text-secondary text-weight-700 text-body2">
                        ' . get_the_title() . '
                    </div>
                </q-card-section>
            </q-card>
        </a>
    ';
      }
      ?>

    </div>
  </q-carousel-slide>
</q-carousel>