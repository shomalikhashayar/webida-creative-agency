<?php get_header();
?>

<?php
$author_id = get_query_var('author');
$author = get_userdata($author_id);
$avatar_url = get_avatar_url($author_id);
$user_website = get_the_author_meta('user_url', $author_id);
?>


<body <?php body_class(); ?>>

    <q-layout :view="rightLayout" v-if="$q.screen.xs">
        <div class="container">
            <?php get_template_part('/layouts/mobile/MainLayout'); ?>
        </div>
        <q-page-container class="bg-white">
            <q-page>

                <div class="bg-accent column items-center q-pa-xl">
                    <q-avatar size="180px" class="author-avatar-shadow">
                        <img class="author-avatar-border" src="<?php echo esc_url($avatar_url); ?>"
                            alt="<?php echo esc_attr($author->display_name); ?>">
                    </q-avatar>

                    <h1 class="text-h3 text-weight-800 text-primary no-letter-spacing">
                        <?php echo esc_html($author->display_name); ?>
                    </h1>

                    <?php if ($user_website): ?>
                        <q-btn class="q-radius-sm" unelevated dense padding="12px 24px"
                            href="<?php echo esc_url($user_website); ?>" target="_blank" color="primary" icon="mail"
                            label="<?php echo esc_html($author->display_name); ?> در لینکدین "></q-btn>
                    <?php endif; ?>

                </div>

                <h2 class="q-pa-lg text-secondary text-weight-800 text-h3 no-letter-spacing text-center q-pt-md">آخرین
                    نوشته‌های
                    <?php echo esc_attr($author->display_name); ?>
                </h2>

                <?php if (have_posts()): ?>
                    <div class="container column q-gutter-y-lg">
                        <?php
                        while (have_posts()):
                            the_post();
                            get_template_part('components/shared/mobile/PostCard');
                        endwhile;
                        ?>
                    </div>

                <?php else: ?>
                    <div class="q-mb-xl">
                        <?php get_template_part('components/shared/NoData'); ?>
                    </div>
                <?php endif; ?>

                <?php if (have_posts()): ?>
                    <div class="q-my-xl">
                        <?php get_template_part('components/shared/Pagination'); ?>
                    </div>
                <?php endif; ?>


            </q-page>
        </q-page-container>
    </q-layout>

    <q-layout :view="rightLayout" v-if="$q.screen.sm">
        <div class="container">
            <?php get_template_part('/layouts/tablet/MainLayout'); ?>
        </div>
        <q-page-container class="bg-white">
            <q-page>

                <div class="bg-accent column items-center q-pa-xl">
                    <q-avatar size="180px" class="author-avatar-shadow">
                        <img class="author-avatar-border" src="<?php echo esc_url($avatar_url); ?>"
                            alt="<?php echo esc_attr($author->display_name); ?>">
                    </q-avatar>

                    <h1 class="text-h3 text-weight-800 text-primary no-letter-spacing">
                        <?php echo esc_html($author->display_name); ?>
                    </h1>

                    <?php if ($user_website): ?>
                        <q-btn class="q-radius-sm" unelevated dense padding="12px 24px"
                            href="<?php echo esc_url($user_website); ?>" target="_blank" color="primary" icon="mail"
                            label="<?php echo esc_html($author->display_name); ?> در لینکدین "></q-btn>
                    <?php endif; ?>

                </div>

                <h2 class="q-pa-lg text-secondary text-weight-800 text-h3 no-letter-spacing text-center q-pt-md">آخرین
                    نوشته‌های
                    <?php echo esc_attr($author->display_name); ?>
                </h2>

                <?php if (have_posts()): ?>
                    <div class="container post-container">
                        <?php
                        while (have_posts()):
                            the_post();
                            get_template_part('components/shared/mobile/PostCard');
                        endwhile;
                        ?>
                    </div>

                <?php else: ?>
                    <div class="q-mb-xl">
                        <?php get_template_part('components/shared/NoData'); ?>
                    </div>
                <?php endif; ?>

                <?php if (have_posts()): ?>
                    <div class="q-my-xl">
                        <?php get_template_part('components/shared/Pagination'); ?>
                    </div>
                <?php endif; ?>


            </q-page>
        </q-page-container>
    </q-layout>

    <q-layout :view="rightLayout" v-if="$q.screen.md">
        <div class="container">
            <?php get_template_part('/layouts/laptop/MainLayout'); ?>
        </div>
        <q-page-container class="bg-white">
            <q-page>

                <div class="bg-accent column items-center q-pa-xl">
                    <q-avatar size="180px" class="author-avatar-shadow">
                        <img class="author-avatar-border" src="<?php echo esc_url($avatar_url); ?>"
                            alt="<?php echo esc_attr($author->display_name); ?>">
                    </q-avatar>

                    <h1 class="text-h3 text-weight-800 text-primary no-letter-spacing">
                        <?php echo esc_html($author->display_name); ?>
                    </h1>

                    <?php if ($user_website): ?>
                        <q-btn class="q-radius-sm" unelevated dense padding="12px 24px"
                            href="<?php echo esc_url($user_website); ?>" target="_blank" color="primary" icon="mail"
                            label="<?php echo esc_html($author->display_name); ?> در لینکدین "></q-btn>
                    <?php endif; ?>

                </div>

                <h2 class="q-pa-lg text-secondary text-weight-800 text-h3 no-letter-spacing text-center q-pt-md">آخرین
                    نوشته‌های
                    <?php echo esc_attr($author->display_name); ?>
                </h2>

                <?php if (have_posts()): ?>
                    <div class="container post-container">
                        <?php
                        while (have_posts()):
                            the_post();
                            get_template_part('components/shared/mobile/PostCard');
                        endwhile;
                        ?>
                    </div>

                <?php else: ?>
                    <div class="q-px-xl q-pb-xl">
                        <?php get_template_part('components/shared/NoData'); ?>
                    </div>
                <?php endif; ?>

                <?php if (have_posts()): ?>
                    <div class="q-my-xl">
                        <?php get_template_part('components/shared/Pagination'); ?>
                    </div>
                <?php endif; ?>


            </q-page>
        </q-page-container>
    </q-layout>

    <q-layout :view="rightLayout" v-if="$q.screen.lg">
        <div class="container">
            <?php get_template_part('/layouts/desktop/MainLayout'); ?>
        </div>
        <q-page-container class="bg-white">
            <q-page>

                <div class="bg-accent column items-center q-pa-xl">
                    <q-avatar size="180px" class="author-avatar-shadow">
                        <img class="author-avatar-border" src="<?php echo esc_url($avatar_url); ?>"
                            alt="<?php echo esc_attr($author->display_name); ?>">
                    </q-avatar>

                    <h1 class="text-h3 text-weight-800 text-primary no-letter-spacing">
                        <?php echo esc_html($author->display_name); ?>
                    </h1>

                    <?php if ($user_website): ?>
                        <q-btn class="q-radius-sm" unelevated dense padding="12px 24px"
                            href="<?php echo esc_url($user_website); ?>" target="_blank" color="primary" icon="mail"
                            label="<?php echo esc_html($author->display_name); ?> در لینکدین "></q-btn>
                    <?php endif; ?>

                </div>

                <h2 class="text-secondary text-weight-800 text-h3 no-letter-spacing text-center q-pt-md">آخرین نوشته‌های
                    <?php echo esc_attr($author->display_name); ?>
                </h2>

                <?php if (have_posts()): ?>
                    <div class="container post-container q-mt-xl">
                        <?php
                        while (have_posts()):
                            the_post();
                            get_template_part('components/shared/desktop/PostCard');
                        endwhile;
                        ?>
                    </div>

                <?php else: ?>
                    <div class="q-px-xl q-pb-xl">
                        <?php get_template_part('components/shared/NoData'); ?>
                    </div>
                <?php endif; ?>

                <?php if (have_posts()): ?>
                    <div class="q-my-xl">
                        <?php get_template_part('components/shared/Pagination'); ?>
                    </div>
                <?php endif; ?>

            </q-page>
        </q-page-container>
    </q-layout>

    <q-layout :view="rightLayout" v-if="$q.screen.gt.lg">
        <div class="container">
            <?php get_template_part('/layouts/desktop/MainLayout'); ?>
        </div>
        <q-page-container class="bg-white">
            <q-page>

                <div class="bg-accent column items-center q-pa-xl">
                    <q-avatar size="180px" class="author-avatar-shadow">
                        <img class="author-avatar-border" src="<?php echo esc_url($avatar_url); ?>"
                            alt="<?php echo esc_attr($author->display_name); ?>">
                    </q-avatar>

                    <h1 class="text-h3 text-weight-800 text-primary no-letter-spacing">
                        <?php echo esc_html($author->display_name); ?>
                    </h1>

                    <?php if ($user_website): ?>
                        <q-btn class="q-radius-sm" unelevated dense padding="12px 24px"
                            href="<?php echo esc_url($user_website); ?>" target="_blank" color="primary" icon="mail"
                            label="<?php echo esc_html($author->display_name); ?> در لینکدین "></q-btn>
                    <?php endif; ?>

                </div>

                <h2 class="text-secondary text-weight-800 text-h3 no-letter-spacing text-center q-pt-md">آخرین نوشته‌های
                    <?php echo esc_attr($author->display_name); ?>
                </h2>

                <?php if (have_posts()): ?>
                    <div class="container post-container q-mt-xl">
                        <?php
                        while (have_posts()):
                            the_post();
                            get_template_part('components/shared/desktop/PostCard');
                        endwhile;
                        ?>
                    </div>

                <?php else: ?>
                    <div class="q-px-xl q-pb-xl">
                        <?php get_template_part('components/shared/NoData'); ?>
                    </div>
                <?php endif; ?>

                <?php if (have_posts()): ?>
                    <div class="q-my-xl">
                        <?php get_template_part('components/shared/Pagination'); ?>
                    </div>
                <?php endif; ?>

            </q-page>
        </q-page-container>
    </q-layout>

    <?php get_footer(); ?>