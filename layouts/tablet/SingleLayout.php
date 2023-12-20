<q-header unelevated bordered class="bg-white">
  <q-toolbar v-if="ad" class="q-py-md webida-primary">
    <div class="col-1"></div>
    <div class="col row justify-center items-center q-gutter-md">
      <span class="text-body1 webiba-text no-letter-spacing">با استفاده از تکنولوژی و خلاقیت بهترین نتیجه را برایتان
        به ارمغان
        می‌آوریم.</span>
      <q-btn @click="ConsultantModal = true" unelevated rounded label="مشاوره رایگان"
        class="webida-primary-lighten text-weight-regular text-body1" padding="6px 12px"></q-btn>

      <?php get_template_part('/components/consultant-modal/ConsultantModal'); ?>
    </div>
    <div class="col-1 row justify-end">
      <q-btn @click="hideAd" unelevated round dense icon="o_close" />
    </div>
  </q-toolbar>
  <div class="container">
    <q-toolbar class="row justify-between items-center q-px-none q-py-lg bg-white">
      <div class="flex link-on-hover">
        <a class="text-h5 no-letter-spacing text-secondary no-decoration text-weight-900"
          href="<?php echo esc_url(home_url()); ?>">
          <q-avatar class="q-mr-sm" size="48px">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/webida-logo.svg">
          </q-avatar>
          آژانس خلاقیت وبیدا</a>
      </div>
      <div class="row items-center q-gutter-sm">
        <q-btn @click="toggleDrawer" unelevated round dense size="20px" color="primary" text-color="white"><q-icon
            size="sm" name="o_lunch_dining"></q-icon></q-btn>
        <q-btn unelevated dense size="20px" color="primary" text-color="white" round>
          <q-icon name="o_perm_phone_msg" size="sm"></q-icon>
          <q-menu fit transition-show="jump-down" transition-hide="jump-up" style="width:280px" :offset="[0, 10]">
            <q-list padding>
              <q-item class="row items-center q-py-sm" clickable href="tel:09338603196">
                <div>
                  <q-item-section avatar>
                    <q-avatar size="xl" text-color="white" color="primary">
                      <q-icon name="o_person" size="28px"></q-icon>
                    </q-avatar>
                  </q-item-section>
                </div>
                <div class="column q-gutter-y-xs">
                  <q-item-label class="text-body1 text-grey-6">خشایار شمالی</q-item-label>
                  <q-item-section class="text-h6">09338603196</q-item-section>
                </div>
              </q-item>
              <q-item class="row items-center q-py-sm" clickable href="tel:09338603196">
                <div>
                  <q-item-section avatar>
                    <q-avatar size="xl" text-color="white" color="primary">
                      <q-icon name="o_person" size="28px"></q-icon>
                    </q-avatar>
                  </q-item-section>
                </div>
                <div class="column q-gutter-y-xs">
                  <q-item-label class="text-body1 text-grey-6">محمدحسین خان‌محمدی</q-item-label>
                  <q-item-section class="text-h6">09215848587</q-item-section>
                </div>
              </q-item>
              <q-item class="row items-center q-py-sm" clickable href="tel:09338603196">
                <div>
                  <q-item-section avatar>
                    <q-avatar size="xl" text-color="white" color="primary">
                      <q-icon name="o_person" size="28px"></q-icon>
                    </q-avatar>
                  </q-item-section>
                </div>
                <div class="column q-gutter-y-xs">
                  <q-item-label class="text-body1 text-grey-6">فاطمه نیلچی</q-item-label>
                  <q-item-section class="text-h6">09100854885</q-item-section>
                </div>
              </q-item>
            </q-list>
          </q-menu>
        </q-btn>
      </div>
    </q-toolbar>
  </div>
</q-header>

<q-drawer v-model="drawer" :width="290" :breakpoint="500" bordered side="left" overlay class="bg-primary">
  <div class="search-box q-pa-md q-mt-lg">
    <?php get_search_form(); ?>
  </div>
  <q-scroll-area style="height: calc(100% - 100px);" :horizontal-thumb-style="{ opacity: 0 }">
    <q-list padding>
      <q-expansion-item expand-separator expand-icon-class="text-white" class="text-subtitle1 text-bold text-white"
        icon="o_handyman" label="خدمات ما">
        <q-item clickable v-ripple v-for="services in serviceList" :key="services">
          <q-item-section avatar>
            <q-icon :name="services.icon" color="white" />
          </q-item-section>
          <q-item-section class="text-body1 text-white text-bold">
            <a class="text-white" :href="'<?php get_site_url() ?>' + services.route">{{
              services.label }}</a>
          </q-item-section>
        </q-item>
      </q-expansion-item>

      <div v-for="menuItems in menuList" :key="menuItems">
        <q-item clickable v-ripple>
          <q-item-section avatar>
            <q-icon class="text-white" :name="menuItems.icon" />
          </q-item-section>
          <q-item-section class="text-body1 text-white text-bold">
            <a class="text-white" :href="'<?php echo get_site_url() ?>' + menuItems.route">{{
              menuItems.label }}</a>
          </q-item-section>
        </q-item>
      </div>

    </q-list>
  </q-scroll-area>
</q-drawer>

<q-footer class="bg-secondary">
  <div class="column q-py-xl container bg-secondary">
    <div class="col-2">
      <p class="text-h4 text-weight-900 text-white q-mb-lg">دسترسی سریع</p>
      <div class="column q-gutter-md">
        <div class="row items-center link-on-hover">
          <q-icon name="circle" size="12px" class="q-mr-md text-primary"></q-icon><a
            class="text-h6 text-weight-400 text-white no-decoration"
            href="<?php echo esc_html(get_site_url()) . '/website-design'; ?>">طراحی سایت</a>
        </div>
        <div class="row items-center link-on-hover">
          <q-icon name="circle" size="12px" class="q-mr-md text-primary"></q-icon><a
            class="text-h6 text-weight-400 text-white no-decoration"
            href="<?php echo esc_html(get_site_url()) . '/seo'; ?>">سئو
            سایت</a>
        </div>
        <div class="row items-center link-on-hover">
          <q-icon name="circle" size="12px" class="q-mr-md text-primary"></q-icon><a
            class="text-h6 text-weight-400 text-white no-decoration"
            href="<?php echo esc_html(get_site_url()) . '/content-produce'; ?>">خدمات تولید محتوا</a>
        </div>
        <div class="row items-center link-on-hover">
          <q-icon name="circle" size="12px" class="q-mr-md text-primary"></q-icon><a
            class="text-h6 text-weight-400 text-white no-decoration"
            href="<?php echo esc_html(get_site_url()) . '/link-building'; ?>">لینک‌سازی و خرید بک
            لینک</a>
        </div>
        <div class="row items-center link-on-hover">
          <q-icon name="circle" size="12px" class="q-mr-md text-primary"></q-icon><a
            class="text-h6 text-weight-400 text-white no-decoration"
            href="<?php echo esc_html(get_site_url()) . '/user-interface-design'; ?>">طراحی رابط و تجربه
            کاربری</a>
        </div>
        <div class="row items-center link-on-hover">
          <q-icon name="circle" size="12px" class="q-mr-md text-primary"></q-icon><a
            class="text-h6 text-weight-400 text-white no-decoration"
            href="<?php echo esc_html(get_site_url()) . '/banner-advertising'; ?>">تبلیغات بنری</a>
        </div>

        <q-separator color="blue-grey-13" class="q-mt-xl q-mb-lg"></q-separator>

        <div class="row items-center link-on-hover">
          <q-icon name="circle" size="12px" class="q-mr-md text-primary"></q-icon><a
            class="text-h6 text-weight-400 text-white no-decoration"
            href="<?php echo esc_html(get_site_url()) . '/blog'; ?>">بلاگ</a>
        </div>
        <div class="row items-center link-on-hover">
          <q-icon name="circle" size="12px" class="q-mr-md text-primary"></q-icon><a
            class="text-h6 text-weight-400 text-white no-decoration"
            href="<?php echo esc_html(get_site_url()) . '/about-us'; ?>">درباره ما</a>
        </div>
        <div class="row items-center link-on-hover">
          <q-icon name="circle" size="12px" class="q-mr-md text-primary"></q-icon><a
            class="text-h6 text-weight-400 text-white no-decoration"
            href="<?php echo esc_html(get_site_url()) . '/contact-us'; ?>">ارتباط با ما</a>
        </div>

        <q-separator color="blue-grey-13" class="q-my-xl"></q-separator>

      </div>
    </div>
    <div class="col-4">
      <p class="text-h4 text-weight-900 text-white q-mb-lg">آخرین مقالات منتشر شده</p>
      <div class="column q-gutter-lg link-on-hover">
        <?php
        $args = array(
          'numberposts' => 6,
          'order' => 'DESC',
        );

        $latest_posts = get_posts($args);

        foreach ($latest_posts as $post) {
          setup_postdata($post);
          echo '<a class="text-h6 text-weight-400 text-white no-decoration" href="' . get_permalink() . '">' . get_the_title() . '</a>';
        }

        ?>
      </div>
    </div>
    <q-separator color="blue-grey-13" class="q-my-xl"></q-separator>
    <div class="col-4">
      <p class="text-h6 text-weight-900 text-white q-mb-lg">راه های ارتباطی شما با ما</p>
      <p class="text-h6 text-weight-400 line-height-md">تهـران، فلکه دوم صادقیه، خیابان آیت الله کاشانی، خیابان بهنام،
        خیابان مقداد،
        برج ترنج
      </p>

      <div class="row justify-between items-center q-py-md link-on-hover">
        <a class="text-h6 text-weight-400 text-white no-decoration" href="tel:09338603196">09338603196</a>
        <a class="text-h6 text-weight-400 text-white no-decoration" href="mailto:info@webida.ir">info@webida.ir</a>
      </div>

      <div class="row justify-between items-center q-py-md link-on-hover">
        <a class="text-h6 text-weight-400 text-white no-decoration" href="tel:09100854885">09100854885</a>
        <a class="text-h6 text-weight-400 text-white no-decoration" href="tel:09215848578">09215848578</a>
      </div>

      <q-card class="no-shadow no-border q-mt-md q-pb-md q-radius-sm bg-blue-grey-8">

        <q-card-section>
          <p class="text-center text-h6 text-weight-400">با ما در شبکه‌های اجتماعی در ارتباط باشید</p>
          <q-separator color="blue-grey-13"></q-separator>
        </q-card-section>

        <q-card-section class="row justify-center items-center q-gutter-lg">
          <q-btn round color="white">
            <q-avatar size="38px">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/youtube.svg" />
            </q-avatar>
          </q-btn>

          <q-btn href="https://www.instagram.com/webidaofficial" target="blank" round color="white">
            <q-avatar size="38px">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/instagram.svg" />
            </q-avatar>
          </q-btn>

          <q-btn round color="white">
            <q-avatar size="38px">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/telegram.svg" />
            </q-avatar>
          </q-btn>

          <q-btn href="https://www.linkedin.com/company/webida" target="blank" round color="white">
            <q-avatar size="38px">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/linkedin.svg" />
            </q-avatar>
          </q-btn>
        </q-card-section>

      </q-card>

      <div class="text-center q-mt-lg">
        <div class="row q-mt-xl q-mb-md justify-center link-on-hover">
          <a class="text-h5 no-letter-spacing text-white no-decoration text-weight-900"
            href="<?php echo esc_url(home_url()); ?>">
            <q-avatar class="q-mr-md" size="48px">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/webida-logo.svg">
            </q-avatar>
            آژانس خلاقیت وبیدا</a>
        </div>

        <p class="text-h6">
          <span class="text-center line-height-md text-weight-600 text-h6">
            <?php
            $jDateTime = new jDateTime();
            $current_year = $jDateTime->date('Y');
            echo $current_year;
            ?> -
          </span>تمامی حقوق مادی و معنوی این وبسایت متعلق به آژانس خلاقیت وبیدا می‌باشد.
        </p>

      </div>

    </div>
  </div>
</q-footer>

<Transition name="fade" mode="out-in" appear>
  <q-btn @click="scrollToTop" v-show="showPageScroller" round size="18px" unelevated id="scroll-to-top" color="primary"
    text-color="white" icon="arrow_upward"></q-btn>
</Transition>