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
                <?php if (have_posts()): ?>
                    <div class="post-container">
                        <?php
                        while (have_posts()):
                            the_post();
                            get_template_part('components/shared/desktop/PostCard');
                        endwhile;
                        ?>
                    </div>
                    <div class="q-my-xl">
                        <?php get_template_part('components/shared/Pagination'); ?>
                    </div>
                <?php else: ?>
                    <div style="margin-bottom:72px">
                        <?php get_template_part('components/search/desktop/NothingFound'); ?>
                    </div>
                <?php endif; ?>
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