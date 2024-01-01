<?php get_header(); ?>

<body <?php body_class(); ?>>

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



    <q-layout :view="rightLayout" v-if="$q.screen.gt.xs">

        <div v-if="$q.screen.sm">
            <?php get_template_part('/layouts/tablet/MainLayout'); ?>
        </div>

        <div v-if="$q.screen.gt.sm">
            <?php get_template_part('/layouts/desktop/MainLayout'); ?>
        </div>

        <q-page-container class="bg-white">
            <q-page class="container">

                <template v-if="$q.screen.gt.sm">
                    <?php get_template_part('components/search/desktop/SearchContent'); ?>
                </template>

                <template v-if="$q.screen.sm">
                    <?php get_template_part('components/search/tablet/SearchContent'); ?>
                </template>
            </q-page>
        </q-page-container>
    </q-layout>


    <?php get_footer(); ?>