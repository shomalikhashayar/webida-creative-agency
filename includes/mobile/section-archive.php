<div class="column q-gutter-y-lg q-pb-xl q-mb-md ">
  <?php if (have_posts()):
    while (have_posts()):
      the_post(); ?>
      <?php get_template_part("components/PostCard") ?>;ّ
    <?php endwhile; endif; ?>
</div>