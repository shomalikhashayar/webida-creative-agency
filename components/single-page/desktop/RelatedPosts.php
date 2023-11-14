<div class="gt-sm">
    <?php
    $categories = get_the_category();
    $category_ids = array();
    foreach ($categories as $category ) {
        $category_ids[] = $category->term_id;
    }

    $args = array(
        'numberposts' => 12,
        'order' => 'DESC',
        'category__in' => $category_ids,
    );

    $latest_related_posts = get_posts($args);
    $slide_count = 1;

    if ($latest_related_posts) {
        echo '<q-carousel v-model="relatedPostsDesktop" transition-prev="jump-right" infinite @mouseenter="autoplay = false" @mouseleave="autoplay = true" transition-next="jump-left" swipeable :autoplay="autoplay" animated control-color="primary" transition-duration="1000" height="305px" class="q-mb-lg">';

        $posts_per_slide = 3; // Number of posts to display in each slide
        $post_count = 0; // Counter to keep track of posts

        foreach ($latest_related_posts as $post) {
            if ($post_count % $posts_per_slide == 0) {
                // Open a new q-carousel-slide for every 3 posts
                if ($post_count > 0) {
                    echo '</q-carousel-slide>';
                }
                echo '<q-carousel-slide class="row justify-between no-padding" :name="' . $slide_count . '">';
                $slide_count++;
            }

            setup_postdata($post);
            $permalink = get_the_permalink();
            $thumbnail_url = (has_post_thumbnail()) ? get_the_post_thumbnail_url($post, 'smallest') : '';

            echo '
                <a class="no-decoration" href="' . $permalink . '">
                    <q-card bordered class="on-hover-primary-1 full-height column justify-between post-card q-radius-sm no-shadow q-pa-md" style="width: 220px;">
                        <q-card-section class="q-pa-none">';
            if (!empty($thumbnail_url)) {
                echo '<q-img style="border-radius:6px" class="q-mb-sm" src="' . $thumbnail_url . '" :ratio="4/3" alt="" height="130px"></q-img>';
            }
            echo '<div class="row justify-between">
                        <div class="row q-gutter-xs items-center justify-end">';
            $post_categories = get_the_category();
            if ($post_categories) {
                foreach ($post_categories as $category) {
                    $category_link = get_category_link($category->term_id);
                    $category_name = esc_html($category->name);
                    echo '<q-badge class="text-weight-600 text-caption-sm q-pa-sm q-radius-md" label="' . $category_name . '" color="primary" text-color="white"></q-badge>';
                }
            }
            echo '</div></div>';
            echo '<p class="text-body2 no-decoration text-weight-400 text-grey-8 line-height-xs q-mt-md">' . get_the_title() . '</p>';
            echo '</q-card-section></q-card></a>';

            $post_count++;
        }

        echo '</q-carousel-slide>';
        echo '</q-carousel>';
        wp_reset_postdata();
    }
    ?>
</div>