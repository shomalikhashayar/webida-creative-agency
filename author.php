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
                <?php get_template_part('components/author/mobile/AuthorSection'); ?>
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
            <q-page>

                <template v-if="$q.screen.gt.sm">
                    <?php get_template_part('components/author/desktop/AuthorSection'); ?>
                </template>

                <template v-if="$q.screen.sm">
                    <?php get_template_part('components/author/tablet/AuthorSection'); ?>
                </template>
            </q-page>
        </q-page-container>
    </q-layout>

    <?php get_footer(); ?>