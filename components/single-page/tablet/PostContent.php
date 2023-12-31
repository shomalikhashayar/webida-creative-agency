<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>
        <?php if (has_post_thumbnail()): ?>
            <q-img spinner-color="primary" class="q-mx-none q-radius-xs" src="<?php the_post_thumbnail_url() ?>"
                alt="<?php the_title() ?>"></q-img>
        <?php endif; ?>
    <?php endwhile; endif; ?>

<div class="row justify-center items-center q-gutter-xs q-pt-sm">
    <div class="row text-body3 text-weight-400 no-letter-spacing text-secondary q-gutter-xs items-center">
        <q-icon name="o_calendar_month" size="xs" class="q-mr-xs" color="primary"></q-icon>
        <div class="text-weight-400">
            آخرین بروزرسانی:
            <?php echo human_time_diff(get_the_modified_time('U'), current_time('timestamp')) . ' پیش'; ?>
            <?php
            $last_modified_date = get_the_modified_date('Y-m-d');
            $jDate = new jDateTime(true, true, 'Asia/Tehran');
            $last_modified_jalali = $jDate->date('d F Y', strtotime($last_modified_date));
            echo 'در ' . $last_modified_jalali;
            ?>
        </div>
    </div>

    <div class="row q-gutter-xs items-center no-decoration">
        <a class="no-decoration text-weight-400 text-body3 no-letter-spacing text-secondary"
            href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
            <q-icon name="o_account_circle" size="xs" class="q-mr-xs" color="primary"></q-icon>
            <?php the_author(); ?>
        </a>
    </div>
</div>


<h1 class="text-h3 q-py-md line-height-md text-center text-weight-900 text-secondary">
    <?php the_title() ?>
</h1>

<div class="post-content">
    <?php get_template_part('components/single-page/TableOfContents'); ?>
</div>