<q-scroll-area :thumb-style="thumbStyle" :bar-style="barStyle" style="height: 80px;" class="full-width">
  <div class="row justify-between no-wrap q-gutter-x-lg">
    <?php
    $categories = get_categories(array('exclude' => get_cat_ID('Uncategorized')));

    if ($categories) {
      foreach ($categories as $category) {
        if ($category->name !== 'Uncategorized') {
          $category_url = get_category_link($category->term_id);
          $icon_name = 'o_search';

          if (strpos($category_url, 'elementor') !== false) {
            $icon_name = 'o_widgets';
          } elseif (strpos($category_url, 'seo') !== false) {
            $icon_name = 'o_ads_click';
          } elseif (strpos($category_url, 'content') !== false) {
            $icon_name = 'o_content_paste';
          } elseif (strpos($category_url, 'wordpress') !== false) {
            $icon_name = 'o_web';
          }

          echo '<div class="col-5">';
          echo '<q-btn class="full-width q-radius-md" padding="20px 24px" color="primary" unelevated href="' . esc_url($category_url) . '">';
          echo '<div class="full-width row justify-between items-center">';
          echo '<h2 class="text-h4 text-weight-400 text-white no-line-height">آموزش ' . esc_html($category->name) . '</h2>';
          echo '<q-icon size="lg" name="' . $icon_name . '"></q-icon>';
          echo '</div>';
          echo '</q-btn>';
          echo '</div>';
        }
      }
    }
    ?>
  </div>
</q-scroll-area>