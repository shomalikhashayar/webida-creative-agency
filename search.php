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
                <div class="post-container">
                    <?php if (have_posts()):
                        while (have_posts()):
                            the_post(); ?>
                            <?php get_template_part('components/shared/desktop/PostCard'); ?>
                        <?php endwhile; else: ?>
                    </div>
                    <div style="margin-bottom:72px">
                        <?php get_template_part('components/search/desktop/NothingFound'); ?>
                    <?php endif; ?>
                </div>
                <div class="q-my-xl">
                    <?php get_template_part('components/shared/pagination'); ?>
                </div>
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
                <div class="column q-gutter-y-lg q-mt-xl">
                    <?php if (have_posts()):
                        while (have_posts()):
                            the_post(); ?>
                            <?php get_template_part('components/shared/mobile/PostCard'); ?>
                        <?php endwhile; else: ?>
                        <?php get_template_part('components/search/mobile/NothingFound'); ?>
                    <?php endif; ?>
                </div>
                <div class="q-my-xl">
                    <?php get_template_part('components/shared/pagination'); ?>
                </div>
            </q-page>
        </q-page-container>
    </q-layout>

    <?php get_footer(); ?>