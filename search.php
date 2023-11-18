<?php get_header(); ?>

<body <?php body_class(); ?>>
    <q-layout :view="rightLayout" class="gt-sm" v-if="$q.screen.gt.sm">>
        <div class="container">
            <?php get_template_part('/layouts/desktop/MainLayout'); ?>
        </div>
        <q-page-container class="bg-white">
            <q-page class="container">
                <h1 class="text-center text-secondary q-py-xl text-weight-900 text-h3">
                    <?php echo "نتایج جستجو برای: " . get_search_query(); ?>
                </h1>

                <div class="post-container q-pb-xl">
                    <?php if (have_posts()):
                        while (have_posts()):
                            the_post(); ?>
                            <?php get_template_part('components/shared/desktop/PostCard'); ?>
                        <?php endwhile; else: ?>

                        <div class="q-my-xl">
                            <?php get_template_part('components/search/desktop/NothingFound'); ?>
                        </div>

                    <?php endif; ?>
                </div>

                <?php get_template_part('components/shared/pagination'); ?>

            </q-page>
        </q-page-container>
    </q-layout>

    <q-layout :view="rightLayout" class="xs" v-if="$q.screen.xs">
        <div class="container">
            <?php get_template_part('/layouts/mobile/MainLayout'); ?>
        </div>
        <q-page-container class="bg-white">
        <q-page class="container">
                <h1 class="text-center text-secondary q-py-xl text-weight-900 text-h3">
                    <?php echo "نتایج جستجو برای: " . get_search_query(); ?>
                </h1>

                <div class="column q-gutter-y-lg q-pb-xl">
                    <?php if (have_posts()):
                        while (have_posts()):
                            the_post(); ?>
                            <?php get_template_part('components/shared/mobile/PostCard'); ?>
                        <?php endwhile; else: ?>

                        <div class="q-my-xl">
                            <?php get_template_part('components/search/mobile/NothingFound'); ?>
                        </div>

                    <?php endif; ?>
                </div>

                <?php get_template_part('components/shared/pagination'); ?>

            </q-page>
        </q-page-container>
    </q-layout>

    <?php get_footer(); ?>