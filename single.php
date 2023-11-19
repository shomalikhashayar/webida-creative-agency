<?php get_header(); ?>
<q-layout :view="rightLayout" class="gt-sm" v-if="$q.screen.gt.sm">
  <div class="container">
    <?php get_template_part('/layouts/desktop/SingleLayout'); ?>
  </div>

  <q-page-container class="bg-white">
    <q-page>
      <?php if (have_posts()):
        while (have_posts()):
          the_post(); ?>

          <div class="container q-my-xl">

            <div class="row q-gutter-xl">
              <div class="col-7">

                <div class="breadcrumb q-mb-lg">
                  <?php get_template_part('components/single-page/desktop/Breadcrumb') ?>
                </div>

                <?php if (has_post_thumbnail()): ?>
                  <q-img class="q-mx-none q-radius-xs" src="<?php the_post_thumbnail_url() ?>"
                    alt="<?php the_title() ?>"></q-img>
                <?php endif; ?>

              <?php endwhile; endif; ?>

            <div class="row justify-center items-center q-gutter-x-sm q-py-lg">

              <div class="row text-body2 text-weight-400 no-letter-spacing text-secondary q-gutter-xs items-center">
                <q-icon name="o_calendar_month" size="20px" color="primary"></q-icon>
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
                  <q-icon name="o_account_circle" size="20px" color="primary"></q-icon>
                  <?php the_author(); ?>
                </a>
              </div>

            </div>

            <h1 class="text-h3 line-height-md text-center text-weight-900 text-secondary">
              <?php the_title() ?>
            </h1>

            <div class="post-content">
              <?php get_template_part('components/single-page/TableOfContents'); ?>
            </div>

            <div class="row items-center justify-center q-gutter-sm q-mt-xl">
              <q-btn dense round flat color="primary" icon="o_send" @click="sharePostURL">
              </q-btn>
              <div class="row items-center">
                <!-- Like button -->
                <q-btn round dense flat icon="o_thumb_up" color="primary" class="like"
                  rel="<?php echo $post->ID; ?>"></q-btn>

                <!-- Span to display like count -->
                <span class="like-count text-body1 text-dark text-bold q-ml-sm">
                  <?php echo likeCount($post->ID); ?>
                </span>
              </div>
            </div>


            <div class="q-pt-sm q-pb-lg">
              <q-separator></q-separator>

              <div class="q-my-md">
                <?php get_template_part("components/single-page/PostNavigation") ?>
              </div>

              <q-separator></q-separator>
            </div>

            <div class="text-h4 text-secondary no-letter-spacing text-weight-700 q-mb-md">مطالب مرتبط</div>

            <div class="q-mb-md">

              <?php get_template_part("components/single-page/desktop/RelatedPosts") ?>

            </div>



          </div>

          <div class="col">
            <aside class="q-mt-xl">
              <?php get_template_part("components/single-page/CategoriesBar") ?>
            </aside>
          </div>
        </div>

      </div>
    </q-page>
  </q-page-container>
</q-layout>


<q-layout :view="rightLayout" class="xs" v-if="$q.screen.xs">
  <div class="container">
    <?php get_template_part('/layouts/mobile/SingleLayout'); ?>
  </div>

  <q-page-container class="bg-white">
    <q-page>
      <div class="container">
        <?php if (have_posts()):
          while (have_posts()):
            the_post(); ?>

            <div class="breadcrumb q-my-lg">
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
          <?php get_template_part('components/single-page/TableOfContents'); ?>
        </div>

        <div class="row items-center justify-center q-gutter-sm q-mt-xl q-mb-md">
          <q-btn dense round flat color="primary" icon="o_send" @click="sharePostURL">
          </q-btn>
          <div class="row items-center">
            <!-- Like button -->
            <q-btn round dense flat icon="o_thumb_up" color="primary" class="like"
              rel="<?php echo $post->ID; ?>"></q-btn>

            <!-- Span to display like count -->
            <span class="like-count text-body1 text-dark text-bold q-ml-sm">
              <?php echo likeCount($post->ID); ?>
            </span>
          </div>
        </div>

        <div class="q-pt-xs q-pb-md">
          <q-separator></q-separator>

          <div class="q-my-md">
            <?php get_template_part("components/single-page/PostNavigation") ?>
          </div>

          <q-separator></q-separator>
        </div>

        <div class="text-h4 text-secondary text-weight-700 q-mb-md">مطالب مرتبط</div>

        <div class="q-mb-md">

          <?php get_template_part("components/single-page/mobile/RelatedPosts") ?>

        </div>

        <div class="col">
          <aside class="q-mt-lg q-mb-xl">
            <?php get_template_part("components/single-page/CategoriesBar") ?>
          </aside>
        </div>
      </div>

    </q-page>
  </q-page-container>
</q-layout>

<?php get_footer(); ?>