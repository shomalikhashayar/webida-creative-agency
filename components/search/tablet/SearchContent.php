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
        'posts_per_page' => 12,
        'orderby' => 'post__in',
        'paged' => max(1, get_query_var('paged'))
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()): ?>
        <div class="post-container q-mb-xl">
            <?php while ($custom_query->have_posts()):
                $custom_query->the_post(); ?>
                <?php get_template_part('components/shared/tablet/PostCard'); ?>
            <?php endwhile; ?>
        </div>

        <?php
        $total_pages = $custom_query->max_num_pages;
        if ($total_pages > 1): ?>
            <div class="q-mb-xl">
                <?php get_template_part('components/shared/Pagination'); ?>
            </div>
        <?php endif; ?>

    <?php else: ?>
        <div class="q-mb-xl">
            <?php get_template_part('components/search/tablet/NothingFound'); ?>
        </div>
    <?php endif;

    wp_reset_postdata();
} else {
    ?>
    <div class="q-mb-xl">
        <?php get_template_part('components/search/tablet/NothingFound'); ?>
    </div>
    <?php
}
?>