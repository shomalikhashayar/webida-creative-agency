<div class="xs">
  <q-header unelevated bordered class="bg-accent">
    <q-toolbar v-if="ad" class="q-py-sm webida-primary">
      <div class="row">
        <div class="col-7 flex items-center">
          <span class="text-caption-sm">با استفاده از تکنولوژی و خلاقیت بهترین نتیجه را برایتان به ارمغان
            می‌آوریم.</span>
        </div>

        <div class="col row items-center justify-end q-gutter-sm">
          <q-btn size="12px" unelevated rounded label="مشاوره رایگان" class="webida-primary-lighten text-weight-regular"
            padding="6px 12px" /></q-btn>
          <q-btn size="sm" @click="hideAd" unelevated round dense icon="o_close"></q-btn>
        </div>
      </div>

    </q-toolbar>
    <div class="container">
      <q-toolbar class="row justify-between items-center q-px-none q-py-md bg-accent">
        <div class="flex link-on-hover">
          <a class="text-body1 no-letter-spacing text-secondary no-decoration text-weight-900"
            href="<?php echo esc_url(home_url()); ?>">
            <q-avatar class="q-mr-sm">
              <img src="http://localhost/webida/wp-content/uploads/2023/10/webida-logo.svg">
            </q-avatar>
            آژانس خلاقیت وبیدا</a>
        </div>
        <div class="row items-center q-gutter-sm">
          <q-btn @click="toggleDrawer" unelevated round dense size="16px" color="primary" text-color="white"><q-icon
              size="xs" name="o_lunch_dining"></q-icon></q-btn>
          <q-btn unelevated dense size="16px" color="primary" text-color="white" round>
            <q-icon name="o_support_agent" size="xs"></q-icon>
            <q-menu fit transition-show="jump-down" transition-hide="jump-up" style="width:240px" :offset="[0, 10]">
              <q-list padding>
                <q-item class="row items-center q-py-sm" clickable href="tel:09338603196">
                  <div>
                    <q-item-section avatar>
                      <q-avatar icon="o_person" size="md" text-color="white" color="primary" />
                    </q-item-section>
                  </div>
                  <div class="column q-gutter-y-xs">
                    <q-item-label caption>خشایار شمالی</q-item-label>
                    <q-item-section class="text-brand">09338603196</q-item-section>
                  </div>
                </q-item>
                <q-item class="row items-center q-py-sm" clickable href="tel:09338603196">
                  <div>
                    <q-item-section avatar>
                      <q-avatar icon="o_person" size="md" text-color="white" color="primary" />
                    </q-item-section>
                  </div>
                  <div class="column q-gutter-y-xs">
                    <q-item-label caption>محمدحسین خان‌محمدی</q-item-label>
                    <q-item-section class="text-brand">09215848587</q-item-section>
                  </div>
                </q-item>
                <q-item class="row items-center q-py-sm" clickable href="tel:09338603196">
                  <div>
                    <q-item-section avatar>
                      <q-avatar icon="o_person" size="md" text-color="white" color="primary" />
                    </q-item-section>
                  </div>
                  <div class="column q-gutter-y-xs">
                    <q-item-label caption>فاطمه نیلچی</q-item-label>
                    <q-item-section class="text-brand">09100854885</q-item-section>
                  </div>
                </q-item>
              </q-list>
            </q-menu>
          </q-btn>
        </div>
      </q-toolbar>
    </div>
  </q-header>

  <q-drawer v-model="drawer" :width="260" :breakpoint="500" bordered side="left" overlay>
    <q-scroll-area class="fit" :horizontal-thumb-style="{ opacity: 0 }">
      <q-list padding>
        <q-expansion-item expand-separator class="text-subtitle2 text-bold text-secondary" icon="o_handyman"
          label="خدمات ما">
          <q-item clickable v-ripple v-for="services in serviceList" :key="services">
            <q-item-section avatar>
              <q-icon :name="services.icon" />
            </q-item-section>
            <q-item-section class="text-subtitle2 text-secondary text-bold">
              <a class="text-secondary" :href="'<?php get_site_url() ?>' + services.route">{{
                services.label }}</a>
            </q-item-section>
          </q-item>
        </q-expansion-item>

        <div v-for="menuItems in menuList" :key="menuItems">
          <q-item clickable v-ripple>
            <q-item-section avatar>
              <q-icon class="text-secondary" :name="menuItems.icon" />
            </q-item-section>
            <q-item-section class="text-subtitle2 text-secondary text-bold">
              <a class="text-secondary" :href="'<?php echo get_site_url() ?>' + menuItems.route">{{
                menuItems.label }}</a>
            </q-item-section>
          </q-item>
        </div>

      </q-list>
    </q-scroll-area>
  </q-drawer>

  <q-footer class="q-py-lg bg-secondary">
    <div class="column q-py-xl container bg-secondary">
      <div class="col-2">
        <p class="text-h6 text-weight-900 text-white">دسترسی سریع</p>
        <div class="column q-gutter-md">
          <div class="row items-center link-on-hover">
            <q-icon name="circle" size="8px" class="q-mr-sm text-primary"></q-icon><a class="text-white no-decoration"
              href="<?php echo esc_html(get_site_url()) . '/website-design'; ?>">طراحی سایت</a>
          </div>
          <div class="row items-center link-on-hover">
            <q-icon name="circle" size="8px" class="q-mr-sm text-primary"></q-icon><a class="text-white no-decoration"
              href="<?php echo esc_html(get_site_url()) . '/seo'; ?>">سئو
              سایت</a>
          </div>
          <div class="row items-center link-on-hover">
            <q-icon name="circle" size="8px" class="q-mr-sm text-primary"></q-icon><a class="text-white no-decoration"
              href="<?php echo esc_html(get_site_url()) . '/content-produce'; ?>">خدمات تولید محتوا</a>
          </div>
          <div class="row items-center link-on-hover">
            <q-icon name="circle" size="8px" class="q-mr-sm text-primary"></q-icon><a class="text-white no-decoration"
              href="<?php echo esc_html(get_site_url()) . '/link-building'; ?>">لینک‌سازی و خرید بک
              لینک</a>
          </div>
          <div class="row items-center link-on-hover">
            <q-icon name="circle" size="8px" class="q-mr-sm text-primary"></q-icon><a class="text-white no-decoration"
              href="<?php echo esc_html(get_site_url()) . '/user-interface-design'; ?>">طراحی رابط و تجربه
              کاربری</a>
          </div>
          <div class="row items-center link-on-hover">
            <q-icon name="circle" size="8px" class="q-mr-sm text-primary"></q-icon><a class="text-white no-decoration"
              href="<?php echo esc_html(get_site_url()) . '/banner-advertising'; ?>">تبلیغات بنری</a>
          </div>

          <q-separator inset color="blue-grey-13" class="q-mt-lg q-mb-sm"></q-separator>

          <div class="row items-center link-on-hover">
            <q-icon name="circle" size="8px" class="q-mr-sm text-primary"></q-icon><a class="text-white no-decoration"
              href="<?php echo esc_html(get_site_url()) . '/blog'; ?>">بلاگ</a>
          </div>
          <div class="row items-center link-on-hover">
            <q-icon name="circle" size="8px" class="q-mr-sm text-primary"></q-icon><a class="text-white no-decoration"
              href="<?php echo esc_html(get_site_url()) . '/about-us'; ?>">درباره ما</a>
          </div>
          <div class="row items-center link-on-hover">
            <q-icon name="circle" size="8px" class="q-mr-sm text-primary"></q-icon><a class="text-white no-decoration"
              href="<?php echo esc_html(get_site_url()) . '/contact-us'; ?>">ارتباط با ما</a>
          </div>

          <q-separator inset color="blue-grey-13" class="q-mt-lg q-mb-md"></q-separator>

        </div>
      </div>
      <div class="col-4">
        <p class="text-h6 text-weight-900 text-white">آخرین مقالات منتشر شده</p>
        <div class="column q-gutter-lg link-on-hover">
          <?php
          $args = array(
            'numberposts' => 8,
            'order' => 'DESC',
          );

          $latest_posts = get_posts($args);

          foreach ($latest_posts as $post) {
            setup_postdata($post);
            echo '<a class="text-white no-decoration" href="' . get_permalink() . '">' . get_the_title() . '</a>';
          }

          ?>
        </div>
      </div>
      <q-separator color="blue-grey-13" class="q-mt-lg q-mb-md"></q-separator>
      <div class="col-4">
        <p class="text-h6 text-weight-900 text-white">راه های ارتباطی شما با ما</p>
        <p class="line-height-xs">تهـران، فلکه دوم صادقیه، خیابان آیت الله کاشانی، خیابان بهنام، خیابان مقداد،
          برج ترنج
        </p>

        <div class="row justify-between items-center q-py-md link-on-hover">
          <a class="text-white no-decoration" href="tel:09338603196">09338603196</a>
          <a class="text-white no-decoration" href="mailto:info@webida.ir">info@webida.ir</a>
        </div>

        <div class="row justify-between items-center q-py-md link-on-hover">
          <a class="text-white no-decoration" href="tel:09100854885">09100854885</a>
          <a class="text-white no-decoration" href="tel:09215848578">09215848578</a>
        </div>

        <q-card class="no-shadow no-border q-mt-md q-pb-md q-radius-sm bg-blue-grey-8">

          <q-card-section>
            <p class="text-center">با ما در شبکه‌های اجتماعی در ارتباط باشید</p>
            <q-separator color="blue-grey-13"></q-separator>
          </q-card-section>

          <q-card-section class="row justify-center items-center q-gutter-lg">
            <q-btn round color="white">
              <q-avatar size="40px">
                <img src="https://cdn.quasar.dev/logo-v2/svg/logo.svg" />
              </q-avatar>
            </q-btn>

            <q-btn round color="white">
              <q-avatar size="40px">
                <img src="https://cdn.quasar.dev/logo-v2/svg/logo.svg" />
              </q-avatar>
            </q-btn>

            <q-btn round color="white">
              <q-avatar size="40px">
                <img src="https://cdn.quasar.dev/logo-v2/svg/logo.svg" />
              </q-avatar>
            </q-btn>

            <q-btn round color="white">
              <q-avatar size="40px">
                <img src="https://cdn.quasar.dev/logo-v2/svg/logo.svg" />
              </q-avatar>
            </q-btn>

            <q-btn round color="white">
              <q-avatar size="40px">
                <img src="https://cdn.quasar.dev/logo-v2/svg/logo.svg" />
              </q-avatar>
            </q-btn>
          </q-card-section>

        </q-card>

        <div class="text-center q-mt-lg">
          <div class="row q-mb-sm justify-center link-on-hover">
            <a class="text-body1 no-letter-spacing text-white no-decoration text-weight-900"
              href="<?php echo esc_url(home_url()); ?>">
              <q-avatar class="q-mr-sm" size="32px">
                <img src="http://localhost/webida/wp-content/uploads/2023/10/webida-logo.svg">
              </q-avatar>
              آژانس خلاقیت وبیدا</a>
          </div>

          <span class="text-center line-height-sm text-weight-600 text-body1">
            <?php
            $jDateTime = new jDateTime();
            $current_year = $jDateTime->date('Y');
            echo $current_year;
            ?> -
          </span>تمامی حقوق مادی و معنوی این وبسایت متعلق به آژانس خلاقیت وبیدا می‌باشد.</p>

        </div>

      </div>
    </div>


  </q-footer>
</div>