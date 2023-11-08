<q-card class="services-card q-pa-md on-hover-primary-1" v-for="n in 6" :key="n">

  <q-card-section class="q-pt-none">
    <h2 class="text-h3 line-height-md no-margin link-on-hover"><a
        class="text-h3 text-secondary text-weight-900 text-secondary no-decoration"
        href="<?php echo esc_html(get_site_url()) . '/website-design'; ?>">طراحی سایت</a></h2>
    <p class="text-body1 no-letter-spacing text-secondary text-weight-300">هویت برندتان را در دنیای دیجیتال به
      نمایش بگذارید</p>
  </q-card-section>

  <q-card-section class="q-pt-none">
    <q-img src="http://localhost/webida/wp-content/uploads/2023/10/webida-website-design.svg" alt="" />
  </q-card-section>

</q-card>