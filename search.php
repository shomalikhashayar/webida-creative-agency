<?php get_header(); ?>

<body <?php body_class(); ?>>
    <!-- لایه موبایل -->
    <q-layout :view="rightLayout" v-if="$q.screen.xs">
        <div class="container">
            <?php get_template_part('/layouts/mobile/MainLayout'); ?>
        </div>
        <q-page-container class="bg-white">
            <q-page class="container">
                <?php get_template_part('components/search/mobile/SearchContent'); ?>
            </q-page>
        </q-page-container>
    </q-layout>


    <!-- لایه دسکتاپ و تبلت  -->
    <q-layout :view="rightLayout" v-if="$q.screen.gt.xs">
        <!-- هدر و فوتر تبلت -->
        <div v-if="$q.screen.sm">
            <?php get_template_part('/layouts/tablet/MainLayout'); ?>
        </div>
        <!-- هدر و فوتر دسکتاپ -->
        <div v-if="$q.screen.gt.sm">
            <?php get_template_part('/layouts/desktop/MainLayout'); ?>
        </div>

        <q-page-container class="bg-white">
            <q-page class="container">
                <!-- صفحه لپتاپ و دسکتاپ -->
                <template v-if="$q.screen.gt.sm">
                    <?php get_template_part('components/search/desktop/SearchContent'); ?>
                </template>
                <!-- صفحه تبلت -->
                <template v-if="$q.screen.sm">
                    <?php get_template_part('components/search/tablet/SearchContent'); ?>
                </template>
            </q-page>
        </q-page-container>
    </q-layout>


    <?php get_footer(); ?>