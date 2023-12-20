<a class="no-decoration" href="<?php the_permalink(); ?>">
  <q-card bordered style="min-height:280px"
    class="full-width on-hover-primary-1 full-height column justify-between post-card q-radius-sm no-shadow q-pa-md">

    <q-card-section class="q-pa-none">
      <?php if (has_post_thumbnail()): ?>
        <q-img fit="cover" class="q-mb-sm q-radius-xs" src="<?php the_post_thumbnail_url(); ?>" :ratio="1" alt=""
          height="180px"></q-img>
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
      <h3 class="text-body1 no-decoration text-weight-900 text-grey-8">
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
            <span class="text-dark">
              <?php $like_count = get_post_meta(get_the_ID(), 'like_count', true);
              ?>
              <span class="like-count">
                <?php echo likeCount($post->ID); ?>
              </span>
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