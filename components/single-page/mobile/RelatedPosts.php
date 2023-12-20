<div class="text-h4 text-secondary text-weight-900 q-mb-md">مطالب مرتبط</div>
<div class="q-mb-md">
    <div>
        <?php
        $categories = get_the_category();
        $category_ids = array();
        foreach ($categories as $category) {
            $category_ids[] = $category->term_id;
        }

        $args = array(
            'numberposts' => 12, // Fetch one more to ensure you have enough to exclude the current post
            'order' => 'DESC',
            'category__in' => $category_ids,
        );

        $current_post_id = get_the_ID();

        $latest_related_posts = get_posts($args);
        $slide_count = 1;

        if ($latest_related_posts) {
            echo '<q-carousel v-model="relatedPostsMobile" transition-prev="jump-right" infinite @mouseenter="autoplay = false" @mouseleave="autoplay = true" transition-next="jump-left" swipeable :autoplay="autoplay" animated control-color="primary" transition-duration="1000" height="280px" class="q-mb-lg">';

            foreach ($latest_related_posts as $post) {
                if ($post->ID != $current_post_id) { // Skip the current post
                    setup_postdata($post);
                    $permalink = get_the_permalink($post->ID);
                    $thumbnail_url = (has_post_thumbnail($post->ID)) ? get_the_post_thumbnail_url($post->ID) : '';

                    echo '<q-carousel-slide class="row justify-center no-padding" :name="' . $slide_count . '">';

                    echo '
                <a class="fit no-decoration" href="' . $permalink . '">
                    <q-card bordered class="on-hover-primary-1 fit q-radius-sm no-shadow q-pa-md">
                        <q-card-section class="q-pa-none">';
                    if (!empty($thumbnail_url)) {
                        echo '<q-img fit="fill" class="q-radius-xs q-mb-sm" src="' . $thumbnail_url . '" :ratio="1" alt="" height="150px"></q-img>';
                    }
                    echo '<div class="row justify-between">
                            <div class="row q-gutter-xs items-center justify-end">';
                    $post_categories = get_the_category($post->ID);
                    if ($post_categories) {
                        foreach ($post_categories as $category) {
                            $category_link = get_category_link($category->term_id);
                            $category_name = esc_html($category->name);
                            echo '<q-badge class="q-mt-sm text-weight-600 text-caption-sm q-pa-sm q-radius-md" label="' . $category_name . '" color="primary" text-color="white"></q-badge>';
                        }
                    }
                    echo '</div></div>';
                    echo '<p style="font-size:14px" class="no-decoration text-weight-400 text-grey-8 line-height-xs q-mt-md">' . get_the_title($post->ID) . '</p>';
                    echo '</q-card-section></q-card></a>';
                    echo '</q-carousel-slide>';
                    $slide_count++;
                }
            }

            echo '</q-carousel>';
            wp_reset_postdata();
        }
        ?>
    </div>
</div>