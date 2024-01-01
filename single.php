<?php get_header(); ?>

<q-layout :view="rightLayout" v-if="$q.screen.xs">
  <?php get_template_part('/layouts/mobile/SingleLayout'); ?>
  <q-page-container class="bg-white">
    <q-page>
      <div class="container">
        <?php get_template_part('components/single-page/mobile/Breadcrumb') ?>
        <?php get_template_part('components/single-page/mobile/PostContent'); ?>
        <?php get_template_part('/components/single-page/mobile/SharePostSection'); ?>
        <?php get_template_part("components/single-page/mobile/RelatedPosts") ?>
        <?php get_template_part("components/single-page/mobile/CategorySection") ?>
      </div>
    </q-page>
  </q-page-container>
</q-layout>



<q-layout :view="rightLayout" v-if="$q.screen.gt.xs">


  <div v-if="$q.screen.sm">
    <?php get_template_part('/layouts/tablet/SingleLayout'); ?>
  </div>

  <div v-if="$q.screen.gt.sm">
    <?php get_template_part('/layouts/desktop/SingleLayout'); ?>
  </div>
  <q-page-container class="bg-white">
    <q-page>

      <template v-if="$q.screen.sm || $q.screen.md">
        <div class="container">

          <?php get_template_part('components/single-page/tablet/Breadcrumb') ?>
          <?php get_template_part('components/single-page/tablet/PostContent'); ?>
          <?php get_template_part('/components/single-page/tablet/SharePostSection'); ?>
          <?php get_template_part('/components/single-page/tablet/RelatedPosts'); ?>
          <?php get_template_part('/components/single-page/tablet/CategorySection'); ?>
        </div>
      </template>

      <template v-if="$q.screen.gt.md">
        <div class="container q-my-xl">
          <div class="row q-gutter-xl">
            <div class="col-7">
              <?php get_template_part('components/single-page/desktop/Breadcrumb') ?>
              <?php get_template_part('components/single-page/desktop/PostContent'); ?>
              <?php get_template_part('/components/single-page/desktop/SharePostSection'); ?>
              <?php get_template_part('/components/single-page/desktop/RelatedPosts'); ?>
            </div>
            <?php get_template_part('/components/single-page/desktop/CategorySection'); ?>
          </div>
        </div>
      </template>

    </q-page>
  </q-page-container>
</q-layout>


<?php get_footer(); ?>