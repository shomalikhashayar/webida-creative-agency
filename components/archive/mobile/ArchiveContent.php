<div class="container">
    <h1 class="text-center text-secondary q-py-xl text-weight-900 text-h3">
        <?php single_cat_title('آموزش ') ?>
    </h1>
    <div class="column q-gutter-y-lg q-pb-xl">
        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <?php get_template_part('components/shared/mobile/PostCard'); ?>
            <?php endwhile; endif; ?>
    </div>

    <?php
    global $wp_query;
    $total_pages = $wp_query->max_num_pages;

    if ($total_pages > 1):
        ?>
        <div class="q-mb-xl">
            <?php get_template_part('components/shared/Pagination'); ?>
        </div>
    <?php endif; ?>
</div>