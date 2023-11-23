<?php get_header(); ?>

<body <?php body_class(); ?>>
    <q-layout :view="rightLayout" class="gt-sm" v-if="$q.screen.gt.sm">
        <div class="container">
            <?php get_template_part('/layouts/desktop/MainLayout'); ?>
        </div>
        <q-page-container class="bg-white">
            <q-page class="container">
                <h1 class="text-center text-secondary q-py-xl text-weight-900 text-h3">
                    <?php echo "نتایج جستجو برای: " . get_search_query(); ?>
                </h1>

                <?php
                global $wpdb;
                $search_query = get_search_query();
                $post_ids = $wpdb->get_col(
                    $wpdb->prepare(
                        "SELECT DISTINCT ID FROM {$wpdb->posts} WHERE post_title LIKE '%%%s%%'",
                        $wpdb->esc_like($search_query)
                    )
                );

                if (!empty($post_ids)) {
                    $args = array(
                        'post_type' => 'post',
                        'post__in' => $post_ids,
                        'posts_per_page' => 12, // Adjust the number of posts per page here
                        'orderby' => 'post__in',
                        'paged' => max(1, get_query_var('paged')) // Get the current page number
                    );

                    $custom_query = new WP_Query($args);

                    if ($custom_query->have_posts()): ?>
                        <div class="post-container">
                            <?php while ($custom_query->have_posts()):
                                $custom_query->the_post(); ?>
                                <?php get_template_part('components/shared/desktop/PostCard'); ?>
                            <?php endwhile; ?>
                        </div>
                        <div class="q-my-xl">
                            <?php get_template_part('components/shared/Pagination'); ?>
                        </div>
                    <?php else: ?>
                        <div style="margin-bottom: 72px;">
                            <?php get_template_part('components/search/desktop/NothingFound'); ?>
                        </div>
                    <?php endif;

                    wp_reset_postdata();
                } else {
                    ?>
                    <div style="margin-bottom: 72px;">
                        <?php get_template_part('components/search/desktop/NothingFound'); ?>
                    </div>
                    <?php
                }
                ?>
            </q-page>
        </q-page-container>
    </q-layout>

    <q-layout :view="rightLayout" class="xs" v-if="$q.screen.xs">
        <div class="container">
            <?php get_template_part('/layouts/mobile/MainLayout'); ?>
        </div>
        <q-page-container class="bg-white">
            <q-page class="container">
                <h1 class="text-center text-secondary q-py-md text-weight-900 text-h3">
                    <?php echo "نتایج جستجو برای: " . get_search_query(); ?>
                </h1>

                <?php
                global $wpdb;
                $search_query = get_search_query();
                $post_ids = $wpdb->get_col(
                    $wpdb->prepare(
                        "SELECT DISTINCT ID FROM {$wpdb->posts} WHERE post_title LIKE '%%%s%%'",
                        $wpdb->esc_like($search_query)
                    )
                );

                if (!empty($post_ids)) {
                    $args = array(
                        'post_type' => 'post',
                        'post__in' => $post_ids,
                        'posts_per_page' => 12, // Adjust the number of posts per page here
                        'orderby' => 'post__in',
                        'paged' => max(1, get_query_var('paged')) // Get the current page number
                    );

                    $custom_query = new WP_Query($args);

                    if ($custom_query->have_posts()): ?>
                        <div class="column q-gutter-y-lg">
                            <?php while ($custom_query->have_posts()):
                                $custom_query->the_post(); ?>
                                <?php get_template_part('components/shared/mobile/PostCard'); ?>
                            <?php endwhile; ?>
                        </div>
                        <div class="q-my-xl">
                            <?php get_template_part('components/shared/Pagination'); ?>
                        </div>
                    <?php else: ?>
                        <div class="q-mb-xl">
                            <?php get_template_part('components/mobile/desktop/NothingFound'); ?>
                        </div>
                    <?php endif;

                    wp_reset_postdata();
                } else {
                    ?>
                    <div class="q-mb-xl">
                        <?php get_template_part('components/search/mobile/NothingFound'); ?>
                    </div>
                    <?php
                }
                ?>
            </q-page>
        </q-page-container>
    </q-layout>

    <?php get_footer(); ?>