<?php

// Template Name: Website Design

?>

<?php
get_header();
?>

<q-layout :view="rightLayout" class="gt-sm" v-if="$q.screen.gt.sm">
    <?php get_template_part('/layouts/desktop/MainLayout'); ?>
    <q-page-container>
        <q-page>
            <?php get_template_part('/components/website-design/desktop/FAQ'); ?>
        </q-page>
    </q-page-container>
</q-layout>

<q-layout :view="rightLayout" class="xs" v-if="$q.screen.xs">
    <?php get_template_part('/layouts/mobile/MainLayout'); ?>
    <q-page-container>
    <q-page>
            <?php get_template_part('/components/website-design/mobile/FAQ'); ?>
        </q-page>
    </q-page-container>
</q-layout>


<?php get_footer(); ?>