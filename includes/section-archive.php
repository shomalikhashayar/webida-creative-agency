<div class="post-container q-pb-xl q-mb-md">
  <?php if (have_posts()):
    while (have_posts()):
      the_post(); ?>

      <a class="no-decoration" href="<?php the_permalink(); ?>">
        <q-card bordered style="width:260px;"
          class="full-height column justify-between post-card q-radius-md no-shadow q-pa-md">

          <q-card-section class="q-pa-none">
            <?php if (has_post_thumbnail()): ?>
              <q-img style="border-radius:6px" class="q-mb-sm" src="<?php the_post_thumbnail_url('smallest'); ?>" :ratio="4/3"
                alt="" height="130px"></q-img>
            <?php endif ?>
            <div class="row justify-between">
              <div style="margin-top:5px;" class="col text-weight-600 text-dark no-letter-spacing text-caption">
                <?php
                $post_date = get_the_date('Y-m-d');
                $persian_date = convert_to_persian_date($post_date);
                echo $persian_date;
                ?>
              </div>
              <div class="col-8">
                <div class="row q-gutter-xs items-center justify-end">
                  <?php
                  $categories = get_the_category();
                  if ($categories) {
                    foreach ($categories as $category) {
                      $category_link = get_category_link($category->term_id);
                      $category_name = esc_html($category->name);

                      echo '<q-badge class="text-weight-600 text-caption-sm q-pa-sm q-radius-md" label="' . $category_name . '" color="primary" text-color="white"></q-badge>';
                    }
                  }
                  ?>
                </div>
              </div>
            </div>
            <h3 class="text-body3 no-decoration text-weight-700 text-dark">
              <?php the_title(); ?>
            </h3>
          </q-card-section>
          <q-card-section class="q-pa-none">
            <div class="row items-center justify-between">
              <div class="text-weight-600 text-dark no-letter-spacing text-caption">
                <?php the_author(); ?>
              </div>
              <div class="row q-gutter-x-sm items-center">
                <div class="row q-gutter-x-xs items-center">
                  <span class="text-dark">{{ like }}</span>
                  <q-icon name="o_favorite" class="text-primary" size="xs"></q-icon>
                </div>
                <div class="row q-gutter-x-xs items-center">
                  <span class="text-dark">{{ comment }}</span>
                  <q-icon name="o_notes" class="text-dark" size="xs"></q-icon>
                </div>
              </div>
            </div>
          </q-card-section>
        </q-card>
      </a>
    <?php endwhile; endif; ?>
</div>