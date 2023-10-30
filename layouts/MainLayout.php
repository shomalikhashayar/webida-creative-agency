    <q-header unelevated bordered class="bg-white">
            <q-toolbar v-if="ad" class="q-py-xs webida-primary">
              <div class="col-1"></div>
              <div class="col row justify-center items-center q-gutter-md">
              <span class="text-body2 webiba-text">با استفاده از تکنولوژی و خلاقیت بهترین نتیجه را برایتان به ارمغان می‌آوریم.</span>
              <q-btn
              unelevated
              rounded
              label="مشاوره رایگان"
              class="webida-primary-lighten text-weight-regular"
              padding="6px 12px"
            />
              </div>
              <div class="col-1 row justify-end">
                <q-btn @click="hideAd" unelevated round dense icon="o_close" />
              </div>
            </q-toolbar>
      <q-toolbar class="q-py-md bg-white">
        <q-btn
          flat
          @click="toggleDrawer"
          round
          dense
          icon="o_lunch_dining"
          color="secondary"
          class="q-mr-md"
        ></q-btn>
        <q-avatar>
        <img src="http://localhost/webida/wp-content/uploads/2023/10/webida-logo.svg">
      </q-avatar>
        <q-toolbar-title>
        <a class="text-body1 no-letter-spacing text-secondary no-decoration text-weight-900" href="<?php echo esc_url(home_url()); ?>">آژانس خلاقیت وبیدا</a>
        </q-toolbar-title>
        <q-space></q-space>
        <q-btn color="secondary" stretch flat label="پشتیبانی" icon="o_support_agent">
        <q-menu
              fit
              transition-show="jump-down"
              transition-hide="jump-up"
              style="width:240px"
              :offset="[0, 10]"
            >
              <q-list
                dense
                class="q-py-lg q-pl-sm"
              >
                </q-item-label>
                <q-item
                >
                  <div class="column">
                    <q-item-section avatar>
                      <q-avatar
                        icon="o_person"
                        size="md"
                        text-color="brand"
                      />
                    </q-item-section>
                  </div>
                 <div class="column">
                 <q-item-label caption>خشایار شمالی</q-item-label>
                  <q-item-section class="text-brand">09338603196</q-item-section>
                 </div>
                </q-item>
                <q-item
                  class="q-mt-md"
                >
                  <div class="column">
                    <q-item-section avatar>
                      <q-avatar
                        icon="o_person"
                        size="md"
                        text-color="brand"
                      />
                    </q-item-section>
                  </div>
                  <div class="column">
                 <q-item-label caption>محمدحسین خان‌محمدی</q-item-label>
                  <q-item-section class="text-brand">09215848587</q-item-section>
                 </div>
                </q-item>
                <q-item
                  class="q-mt-md"
                >
                  <div class="column">
                    <q-item-section avatar>
                      <q-avatar
                        icon="o_person"
                        size="md"
                        text-color="brand"
                      />
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
      </q-toolbar>
    </q-header>

    <q-drawer
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
    </q-drawer>

    <q-footer class="row justify-center q-gutter-md q-py-xl bg-secondary">
        <div class="col-2">
          <p class="text-h6 text-weight-900 text-white">دسترسی سریع</p>
          <div class="column q-gutter-sm">
            <div class="row items-center q-gutter-sm">
            <q-icon name="circle" size="8px" class="text-primary"></q-icon><a class="text-white no-decoration" href="<?php echo esc_html(get_site_url()) . '/website-design'; ?>">طراحی سایت</a>
            </div>
            <div class="row items-center q-gutter-sm">
            <q-icon name="circle" size="8px" class="text-primary"></q-icon><a class="text-white no-decoration" href="<?php echo esc_html(get_site_url()) . '/seo'; ?>">سئو سایت</a>
            </div>
            <div class="row items-center q-gutter-sm">
            <q-icon name="circle" size="8px" class="text-primary"></q-icon><a class="text-white no-decoration" href="<?php echo esc_html(get_site_url()) . '/content-produce'; ?>">خدمات تولید محتوا</a>
            </div>
            <div class="row items-center q-gutter-sm">
            <q-icon name="circle" size="8px" class="text-primary"></q-icon><a class="text-white no-decoration" href="<?php echo esc_html(get_site_url()) . '/link-building'; ?>">لینک‌سازی و خرید بک لینک</a>
            </div>
            <div class="row items-center q-gutter-sm">
            <q-icon name="circle" size="8px" class="text-primary"></q-icon><a class="text-white no-decoration" href="<?php echo esc_html(get_site_url()) . '/user-interface-design'; ?>">طراحی رابط و تجربه کاربری</a>
            </div>
            <div class="row items-center q-gutter-sm">
            <q-icon name="circle" size="8px" class="text-primary"></q-icon><a class="text-white no-decoration" href="<?php echo esc_html(get_site_url()) . '/banner-advertising'; ?>">تبلیغات بنری</a>
            </div>

<q-separator inset color="blue-grey-13" class="q-mt-lg q-mb-sm"></q-separator>

            <div class="row items-center q-gutter-sm">
            <q-icon name="circle" size="8px" class="text-primary"></q-icon><a class="text-white no-decoration" href="<?php echo esc_html(get_site_url()) . '/blog'; ?>">بلاگ</a>
            </div>
            <div class="row items-center q-gutter-sm">
            <q-icon name="circle" size="8px" class="text-primary"></q-icon><a class="text-white no-decoration" href="<?php echo esc_html(get_site_url()) . '/about-us'; ?>">درباره ما</a>
            </div>
            <div class="row items-center q-gutter-sm">
            <q-icon name="circle" size="8px" class="text-primary"></q-icon><a class="text-white no-decoration" href="<?php echo esc_html(get_site_url()) . '/contact-us'; ?>">ارتباط با ما</a>
            </div>
          </div>
        </div>
        <q-separator vertical inset color="blue-grey-13"></q-separator>
        <div class="col-3">
          <p class="text-h6 text-weight-900 text-white">آخرین مقالات منتشر شده</p>
          <div class="column q-gutter-lg" style="margin-top: -12px">
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
            <div class="col-3">
          <p class="text-h6 text-weight-900 text-white">آخرین مقالات منتشر شده</p>
          <div class="column q-gutter-lg" style="margin-top: -12px">
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

        <div class="col-2">
          <p class="text-h6 text-weight-900 text-white">دسترسی سریع</p>
          <div class="column q-gutter-sm">
            <div class="row items-center q-gutter-sm">
            <q-icon name="circle" size="8px" class="text-primary"></q-icon><a class="text-white no-decoration" href="<?php echo esc_html(get_site_url()) . '/website-design'; ?>">طراحی سایت</a>
            </div>
            <div class="row items-center q-gutter-sm">
            <q-icon name="circle" size="8px" class="text-primary"></q-icon><a class="text-white no-decoration" href="<?php echo esc_html(get_site_url()) . '/seo'; ?>">سئو سایت</a>
            </div>
            <div class="row items-center q-gutter-sm">
            <q-icon name="circle" size="8px" class="text-primary"></q-icon><a class="text-white no-decoration" href="<?php echo esc_html(get_site_url()) . '/content-produce'; ?>">خدمات تولید محتوا</a>
            </div>
            <div class="row items-center q-gutter-sm">
            <q-icon name="circle" size="8px" class="text-primary"></q-icon><a class="text-white no-decoration" href="<?php echo esc_html(get_site_url()) . '/link-building'; ?>">لینک‌سازی و خرید بک لینک</a>
            </div>
            <div class="row items-center q-gutter-sm">
            <q-icon name="circle" size="8px" class="text-primary"></q-icon><a class="text-white no-decoration" href="<?php echo esc_html(get_site_url()) . '/user-interface-design'; ?>">طراحی رابط و تجربه کاربری</a>
            </div>
            <div class="row items-center q-gutter-sm">
            <q-icon name="circle" size="8px" class="text-primary"></q-icon><a class="text-white no-decoration" href="<?php echo esc_html(get_site_url()) . '/banner-advertising'; ?>">تبلیغات بنری</a>
            </div>

<q-separator inset color="blue-grey-13" class="q-mt-lg q-mb-sm"></q-separator>

            <div class="row items-center q-gutter-sm">
            <q-icon name="circle" size="8px" class="text-primary"></q-icon><a class="text-white no-decoration" href="<?php echo esc_html(get_site_url()) . '/blog'; ?>">بلاگ</a>
            </div>
            <div class="row items-center q-gutter-sm">
            <q-icon name="circle" size="8px" class="text-primary"></q-icon><a class="text-white no-decoration" href="<?php echo esc_html(get_site_url()) . '/about-us'; ?>">درباره ما</a>
            </div>
            <div class="row items-center q-gutter-sm">
            <q-icon name="circle" size="8px" class="text-primary"></q-icon><a class="text-white no-decoration" href="<?php echo esc_html(get_site_url()) . '/contact-us'; ?>">ارتباط با ما</a>
            </div>
          </div>
        </div>
      </q-footer>

        