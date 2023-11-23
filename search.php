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
                        'posts_per_page' => -1,
                        'orderby' => 'post__in' // Order the results by the order of IDs in $post_ids
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
                    <?php endif; ?>

                    <?php wp_reset_postdata();
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
                <div class="column q-gutter-y-lg">
                    <?php if (have_posts()): ?>
                        <?php
                        while (have_posts()):
                            the_post();
                            get_template_part('components/shared/mobile/PostCard');
                        endwhile;
                        ?>
                        <div class="q-my-xl">
                            <?php get_template_part('components/shared/Pagination'); ?>
                        </div>
                    <?php else: ?>
                        <div class="q-mb-xl">
                            <?php get_template_part('components/search/mobile/NothingFound'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </q-page>
        </q-page-container>
    </q-layout>

    <?php get_footer(); ?>