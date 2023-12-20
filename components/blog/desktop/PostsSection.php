<div class="post-container q-my-xl">
    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>
            <?php get_template_part('components/shared/desktop/PostCard'); ?>
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