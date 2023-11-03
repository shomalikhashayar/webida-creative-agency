<?php get_header(); ?>

<q-layout :view="rightLayout" class="gt-sm">
  <div class="container">
    <?php get_template_part('/layouts/desktop/SingleLayout'); ?>
  </div>

  <q-page-container>
    <q-page>
      <div class="container q-my-xl">

        <div class="row q-gutter-xl">
          <div class="col-7">

            <?php if (have_posts()):
              while (have_posts()):
                the_post(); ?>

                <?php if (has_post_thumbnail()): ?>
                  <q-img class="q-mx-none q-radius-xs" src="<?php the_post_thumbnail_url() ?>"
                    alt="<?php the_title() ?>"></q-img>
                <?php endif; ?>

              <?php endwhile; endif; ?>



            <h1 class="text-h3 text-center text-weight-900 text-secondary">
              <?php the_title() ?>
            </h1>


            <div>
              <?php get_template_part('includes/section', 'content'); ?>
            </div>

          </div>

          <div class="col">
            <q-list>
              <q-item class="q-pa-none">
                <q-item-section class="text-center">

                <div class="row items-center">
                  <div class="col"><q-separator></q-separator></div>
                  <div class="col">دسته‌بندی‌ها</div>
                  <div class="col"><q-separator></q-separator></div>
                </div>

                </q-item-section>
              </q-item>
              <q-item>
                <q-item-section class="text-center">آموزش سئو</q-item-section>
              </q-item>
              <q-separator></q-separator>
              <q-item>
                <q-item-section class="text-center">آموزش المنتور</q-item-section>
              </q-item>
              <q-separator></q-separator>
              <q-item>
                <q-item-section class="text-center">آموزش محتوا</q-item-section>
              </q-item>
              <q-separator /></q-separator>
              <q-item>
                <q-item-section class="text-center">آموزش وردپرس</q-item-section>
              </q-item>
              <q-separator /></q-separator>
            </q-list>
          </div>
        </div>

      </div>
    </q-page>
  </q-page-container>
</q-layout>

<?php get_footer(); ?>