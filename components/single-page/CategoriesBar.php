<?php
// Get all categories except 'Uncategorized'
$categories = get_categories(array('exclude' => get_cat_ID('Uncategorized')));

// Check if categories exist
if ($categories) {
  echo '<q-list>';

  // Category title section
  echo '<q-item class="q-pa-none">';
  echo '<q-item-section class="text-center">';
  echo '<div class="row items-center">';
  echo '<div class="col"><q-separator size="2px"></q-separator></div>';
  echo '<div class="col text-weight-900 no-letter-spacing text-body1 q-px-lg text-secondary">دسته‌بندی‌ها</div>';
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
}
?>