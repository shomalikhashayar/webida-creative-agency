<?php get_header(); ?>
<q-layout :view="rightLayout" class="gt-sm">
  <div class="container">
    <?php get_template_part('/layouts/desktop/SingleLayout'); ?>
  </div>

  <q-page-container class="bg-white">
    <q-page>

      <div class="container row">
        <?php if (have_posts()):
          while (have_posts()):
            the_post(); ?>

            <div class="breadcrumb q-mt-xl">
              <?php get_template_part('components/single-page/desktop/Breadcrumb') ?>
            </div>
          </div>
          <div class="container q-mt-sm q-mb-xl">

            <div class="row q-gutter-xl">
              <div class="col-7">


                <?php if (has_post_thumbnail()): ?>
                  <q-img class="q-mx-none q-radius-xs" src="<?php the_post_thumbnail_url() ?>"
                    alt="<?php the_title() ?>"></q-img>
                <?php endif; ?>

              <?php endwhile; endif; ?>

            <div class="row justify-center items-center q-gutter-x-sm q-py-lg">

              <div class="row text-body2 text-weight-400 no-letter-spacing text-secondary q-gutter-xs items-center">
                <q-icon name="o_calendar_month" size="sm" color="primary"></q-icon>
                <div class="text-weight-400">
                  آخرین بروزرسانی:
                  <?php echo human_time_diff(get_the_modified_time('U'), current_time('timestamp')) . ' پیش'; ?>
                  <?php
                  $last_modified_date = get_the_modified_date('Y-m-d');
                  $jDate = new jDateTime(true, true, 'Asia/Tehran');
                  $last_modified_jalali = $jDate->date('d F Y', strtotime($last_modified_date));
                  echo 'در ' . $last_modified_jalali;
                  ?>
                </div>
              </div>

              <div class="row inline q-gutter-xs items-center no-decoration">
                <a class="no-decoration text-weight-400 text-body2 no-letter-spacing text-secondary"
                  href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                  <q-icon name="o_account_circle" size="sm" color="primary"></q-icon>
                  <?php the_author(); ?>
                </a>
              </div>

            </div>

            <h1 class="text-h3 line-height-md text-center text-weight-900 text-secondary">
              <?php the_title() ?>
            </h1>

            <div class="post-content">
              <?php webida_TOC(); ?>
            </div>

            <div class="q-py-lg">
              <q-separator></q-separator>

              <div class="q-mt-lg q-mb-md">
                <?php get_template_part("components/single-page/desktop/ShareSection") ?>
                <?php get_template_part("components/single-page/PostNavigation") ?>
              </div>

              <q-separator></q-separator>
            </div>

            <div class="text-h4 text-secondary no-letter-spacing text-weight-700 q-mb-md">مطالب مرتبط</div>

            <div class="q-mb-md">

              <?php get_template_part("components/single-page/desktop/RelatedPosts") ?>

            </div>



          </div>

          <?php
          // Get all categories except 'Uncategorized'
          $categories = get_categories(array('exclude' => get_cat_ID('Uncategorized')));

          // Check if categories exist
          if ($categories) {
            echo '<div class="col">';
            echo '<q-list>';

            // Category title section
            echo '<q-item class="q-pa-none">';
            echo '<q-item-section class="text-center">';
            echo '<div class="row items-center">';
            echo '<div class="col"><q-separator size="2px"></q-separator></div>';
            echo '<div class="col text-weight-700 no-letter-spacing text-body1 text-secondary">دسته‌بندی‌ها</div>';
            echo '<div class="col"><q-separator size="2px"></q-separator></div>';
            echo '</div>';
            echo '</q-item-section>';
            echo '</q-item>';

            // Display modified categories
            foreach ($categories as $category) {
              if ($category->name !== 'Uncategorized') {
                echo '<q-item>';
                echo '<q-item-section class="link-on-hover q-my-md text-center text-weight-600 no-letter-spacing text-body2 text-secondary">';
                echo '<a class="no-decoration text-secondary" href="' . esc_url(get_category_link($category->term_id)) . '">آموزش ' . esc_html($category->name) . '</a>';
                echo '</q-item-section>';
                echo '</q-item>';
                echo '<q-separator></q-separator>';
              }
            }

            echo '</q-list>';
            echo '</div>';
          }
          ?>


        </div>

      </div>
    </q-page>
  </q-page-container>
</q-layout>


<q-layout :view="rightLayout" class="xs">
  <div class="container">
    <?php get_template_part('/layouts/mobile/SingleLayout'); ?>
  </div>

  <q-page-container class="bg-white">
    <q-page>
      <div class="container">
        <?php if (have_posts()):
          while (have_posts()):
            the_post(); ?>

            <div class="breadcrumb q-my-md">
              <?php get_template_part('components/single-page/mobile/Breadcrumb') ?>
            </div>

            <?php if (has_post_thumbnail()): ?>
              <q-img class="q-mx-none q-radius-xs" src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>"></q-img>
            <?php endif; ?>

          <?php endwhile; endif; ?>

        <div class="row justify-center items-center q-gutter-xs q-pt-sm">
          <div class="row text-body3 text-weight-400 no-letter-spacing text-secondary q-gutter-xs items-center">
            <q-icon name="o_calendar_month" size="xs" class="q-mr-xs" color="primary"></q-icon>
            <div class="text-weight-400">
              آخرین بروزرسانی:
              <?php echo human_time_diff(get_the_modified_time('U'), current_time('timestamp')) . ' پیش'; ?>
              <?php
              $last_modified_date = get_the_modified_date('Y-m-d');
              $jDate = new jDateTime(true, true, 'Asia/Tehran');
              $last_modified_jalali = $jDate->date('d F Y', strtotime($last_modified_date));
              echo 'در ' . $last_modified_jalali;
              ?>
            </div>
          </div>

          <div class="row q-gutter-xs items-center no-decoration">
            <a class="no-decoration text-weight-400 text-body3 no-letter-spacing text-secondary"
              href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
              <q-icon name="o_account_circle" size="xs" class="q-mr-xs" color="primary"></q-icon>
              <?php the_author(); ?>
            </a>
          </div>
        </div>


        <h1 class="text-h3 line-height-md text-center text-weight-900 text-secondary">
          <?php the_title() ?>
        </h1>

        <div class="post-content">
          <?php webida_TOC(); ?>
        </div>

        <div class="q-py-md">
          <q-separator></q-separator>

          <div class="q-mt-lg q-mb-md">
            <?php get_template_part("components/single-page/mobile/ShareSection") ?>
            <?php get_template_part("components/single-page/PostNavigation") ?>
          </div>

          <q-separator></q-separator>
        </div>

        <div class="text-h4 text-secondary text-weight-700 q-mb-md">مطالب مرتبط</div>

        <div class="q-mb-md">

          <?php get_template_part("components/single-page/mobile/RelatedPosts") ?>

        </div>

        <q-list>
          <q-item class="q-pa-none">
            <q-item-section class="text-center">

              <div class="row items-center">
                <div class="col"><q-separator size="2px"></q-separator></div>
                <div class="col text-weight-700 no-letter-spacing text-body1 text-secondary">دسته‌بندی‌ها</div>
                <div class="col"><q-separator size="2px"></q-separator></div>
              </div>

            </q-item-section>
          </q-item>
          <q-item>
            <q-item-section
              class="q-my-md text-center text-weight-600 no-letter-spacing text-body2 text-secondary">آموزش
              سئو</q-item-section>
          </q-item>
          <q-separator></q-separator>
          <q-item>
            <q-item-section
              class="q-my-md text-center text-weight-600 no-letter-spacing text-body2 text-secondary">آموزش
              المنتور</q-item-section>
          </q-item>
          <q-separator></q-separator>
          <q-item>
            <q-item-section
              class="q-my-md text-center text-weight-600 no-letter-spacing text-body2 text-secondary">آموزش
              محتوا</q-item-section>
          </q-item>
          <q-separator></q-separator>
          <q-item>
            <q-item-section
              class="q-my-md text-center text-weight-600 no-letter-spacing text-body2 text-secondary">آموزش
              وردپرس</q-item-section>
          </q-item>
          <q-separator></q-separator>
        </q-list>

      </div>

    </q-page>
  </q-page-container>
</q-layout>


<?php get_footer(); ?>