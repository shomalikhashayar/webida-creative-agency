<q-header unelevated bordered class="bg-accent">
  <q-toolbar v-if="ad" class="q-py-xs webida-primary">
    <div class="col-1"></div>
    <div class="col row justify-center items-center q-gutter-md">
      <span class="text-body2 webiba-text">با استفاده از تکنولوژی و خلاقیت بهترین نتیجه را برایتان به ارمغان
        می‌آوریم.</span>
      <q-btn unelevated rounded label="مشاوره رایگان" class="webida-primary-lighten text-weight-regular"
        padding="6px 12px" />
    </div>
    <div class="col-1 row justify-end">
      <q-btn @click="hideAd" unelevated round dense icon="o_close" />
    </div>
  </q-toolbar>
  <div class="container">
    <q-toolbar class="row justify-between items-center q-px-none q-py-md bg-accent">
      <a class="text-body1 no-letter-spacing text-secondary no-decoration text-weight-900"
        href="<?php echo esc_url(home_url()); ?>">
        <q-avatar class="q-mr-sm">
          <img src="http://localhost/webida/wp-content/uploads/2023/10/webida-logo.svg">
        </q-avatar>
        آژانس خلاقیت وبیدا</a>
      <div class="row">
        <q-btn-dropdown class="text-secondary" unelevated label="خدمات وبیدا" dropdown-icon="change_history">
          <q-list padding>
            <q-item v-for="services in serviceList" :key="services" clickable v-close-popup>
              <q-item-section>
                <div class="row items-center q-gutter-sm">
                  <q-icon :name="services.icon" size="xs" class="text-secondary"></q-icon><a
                    class="text-secondary no-decoration" :href="'<?php echo get_site_url() ?>' + services.route">{{
                    services.label}}</a>
                </div>
              </q-item-section>
            </q-item>
          </q-list>
        </q-btn-dropdown>
        <q-btn class="text-secondary" href="<?php echo esc_html(get_site_url()) . '/blog'; ?>" unelevated label="بلاگ"
          icon="o_article"></q-btn>
        <q-btn class="text-secondary" href="<?php echo esc_html(get_site_url()) . '/about-us'; ?>" unelevated
          label="درباره ما" icon="o_diversity_3"></q-btn>
        <q-btn class="text-secondary" href="<?php echo esc_html(get_site_url()) . '/contact-us'; ?>" unelevated
          label="ارتباط با ما" icon="o_support_agent"></q-btn>
      </div>
      <div class="row items-center">
        <q-btn unelevated flat dense color="primary" round icon="o_search"></q-btn>
        <q-btn color="secondary" stretch flat label="پشتیبانی" icon="o_support_agent">
          <q-menu fit transition-show="jump-down" transition-hide="jump-up" style="width:240px" :offset="[0, 10]">
            <q-list dense class="q-py-lg q-pl-sm">
              <q-item>
                <div class="column">
                  <q-item-section avatar>
                    <q-avatar icon="o_person" size="md" text-color="brand" />
                  </q-item-section>
                </div>
                <div class="column">
                  <q-item-label caption>خشایار شمالی</q-item-label>
                  <q-item-section class="text-brand">09338603196</q-item-section>
                </div>
              </q-item>
              <q-item class="q-mt-md">
                <div class="column">
                  <q-item-section avatar>
                    <q-avatar icon="o_person" size="md" text-color="brand" />
                  </q-item-section>
                </div>
                <div class="column">
                  <q-item-label caption>محمدحسین خان‌محمدی</q-item-label>
                  <q-item-section class="text-brand">09215848587</q-item-section>
                </div>
              </q-item>
              <q-item class="q-mt-md">
                <div class="column">
                  <q-item-section avatar>
                    <q-avatar icon="o_person" size="md" text-color="brand" />
                  </q-item-section>
                </div>
                <div class="column">
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

<!-- <q-drawer
      v-model="drawer"
      :width="260"
      :breakpoint="500"
      bordered
      unelevated
      show-if-above
      side="left"
      overlay
    >
      <q-scroll-area class="fit" :horizontal-thumb-style="{ opacity: 0 }">
        <q-list padding>
          <q-expansion-item
            expand-separator
            class="text-subtitle2 text-bold text-secondary"
            icon="o_handyman"
            label="خدمات ما"
          >
            <q-item
              clickable
              v-ripple
              v-for="services in serviceList"
              :key="services"
            >
              <q-item-section avatar>
                <q-icon :name="services.icon" />
              </q-item-section>
              <q-item-section class="text-subtitle2 text-secondary text-bold">
              <a class="text-secondary" :href="'<?php get_site_url() ?>' + services.route">{{ services.label }}</a>
              </q-item-section>
            </q-item>
          </q-expansion-item>

          <div
            v-for="menuItems in menuList"
            :key="menuItems"
          >
            <q-item
              clickable
              v-ripple
            >
              <q-item-section avatar>
                <q-icon class="text-secondary" :name="menuItems.icon" />
              </q-item-section>
              <q-item-section class="text-subtitle2 text-secondary text-bold">
              <a class="text-secondary" :href="'<?php echo get_site_url() ?>' + menuItems.route">{{ menuItems.label }}</a>
              </q-item-section>
            </q-item>
          </div>

        </q-list>
      </q-scroll-area>
    </q-drawer> -->

<q-footer class="bg-secondary">
  <div class="row justify-between q-py-xl container bg-secondary">
    <div class="col-2">
      <p class="text-h6 text-weight-900 text-white">دسترسی سریع</p>
      <div class="column q-gutter-md">
        <div class="row items-center">
          <q-icon name="circle" size="8px" class="q-mr-sm text-primary"></q-icon><a class="text-white no-decoration"
            href="<?php echo esc_html(get_site_url()) . '/website-design'; ?>">طراحی سایت</a>
        </div>
        <div class="row items-center">
          <q-icon name="circle" size="8px" class="q-mr-sm text-primary"></q-icon><a class="text-white no-decoration"
            href="<?php echo esc_html(get_site_url()) . '/seo'; ?>">سئو سایت</a>
        </div>
        <div class="row items-center">
          <q-icon name="circle" size="8px" class="q-mr-sm text-primary"></q-icon><a class="text-white no-decoration"
            href="<?php echo esc_html(get_site_url()) . '/content-produce'; ?>">خدمات تولید محتوا</a>
        </div>
        <div class="row items-center">
          <q-icon name="circle" size="8px" class="q-mr-sm text-primary"></q-icon><a class="text-white no-decoration"
            href="<?php echo esc_html(get_site_url()) . '/link-building'; ?>">لینک‌سازی و خرید بک لینک</a>
        </div>
        <div class="row items-center">
          <q-icon name="circle" size="8px" class="q-mr-sm text-primary"></q-icon><a class="text-white no-decoration"
            href="<?php echo esc_html(get_site_url()) . '/user-interface-design'; ?>">طراحی رابط و تجربه کاربری</a>
        </div>
        <div class="row items-center">
          <q-icon name="circle" size="8px" class="q-mr-sm text-primary"></q-icon><a class="text-white no-decoration"
            href="<?php echo esc_html(get_site_url()) . '/banner-advertising'; ?>">تبلیغات بنری</a>
        </div>

        <q-separator inset color="blue-grey-13" class="q-mt-lg q-mb-sm"></q-separator>

        <div class="row items-center">
          <q-icon name="circle" size="8px" class="q-mr-sm text-primary"></q-icon><a class="text-white no-decoration"
            href="<?php echo esc_html(get_site_url()) . '/blog'; ?>">بلاگ</a>
        </div>
        <div class="row items-center">
          <q-icon name="circle" size="8px" class="q-mr-sm text-primary"></q-icon><a class="text-white no-decoration"
            href="<?php echo esc_html(get_site_url()) . '/about-us'; ?>">درباره ما</a>
        </div>
        <div class="row items-center">
          <q-icon name="circle" size="8px" class="q-mr-sm text-primary"></q-icon><a class="text-white no-decoration"
            href="<?php echo esc_html(get_site_url()) . '/contact-us'; ?>">ارتباط با ما</a>
        </div>
      </div>
    </div>
    <q-separator vertical inset color="blue-grey-13"></q-separator>
    <div class="col-4">
      <p class="text-h6 text-weight-900 text-white">آخرین مقالات منتشر شده</p>
      <div class="column q-gutter-lg">
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
    <q-separator vertical inset color="blue-grey-13"></q-separator>
    <div class="col-4">
      <p class="text-h6 text-weight-900 text-white">راه های ارتباطی شما با ما</p>
      <p class="line-height-xs">تهـران، فلکه دوم صادقیه، خیابان آیت الله کاشانی، خیابان بهنام، خیابان مقداد، برج ترنج
      </p>

      <div class="row justify-between items-center q-py-md">
        <a class="text-white no-decoration" href="tel:09338603196">09338603196</a>
        <a class="text-white no-decoration" href="mailto:info@webida.ir">info@webida.ir</a>
      </div>

      <div class="row justify-between items-center q-py-md">
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

    </div>
  </div>

  <div class="container">
    <q-separator color="blue-grey-13"></q-separator>
  </div>

  <div class="row container justify-between q-py-lg">
    <p>پاییز 1402. تمامی حقوق مادی و معنوی این وبسایت متعلق به آژانس خلاقیت وبیدا است.</p>
    <div class="row">
      <a class="text-body1 no-letter-spacing text-white no-decoration text-weight-900"
        href="<?php echo esc_url(home_url()); ?>">
        <q-avatar class="q-mr-sm" size="32px">
          <img src="http://localhost/webida/wp-content/uploads/2023/10/webida-logo.svg">
        </q-avatar>
        آژانس خلاقیت وبیدا</a>
    </div>
  </div>
</q-footer>