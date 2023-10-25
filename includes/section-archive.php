<div class="row q-gutter-lg justify-start">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<q-card  style="width:300px; " class="q-radius-md q-ma-xl q-pa-lg">
<?php if (has_post_thumbnail()) : ?>
    <q-img src="<?php the_post_thumbnail_url('smallest'); ?>" :ratio="4/3" alt="" class="qwp-home-featured-img"></q-img>
  <?php endif ?>
<q-card-section class="q-px-none">
<div class="text-h6"><?php the_title(); ?></div>
</q-card-section>
<q-card-section class="q-px-none">
<?php the_excerpt(); ?>
</q-card-section>
<q-card-actions class="q-px-none">
    <q-btn rounded padding="8px 16px" class="text-white bg-primary text-bold">
    <a href="<?php the_permalink(); ?>">ادامه مطلب</a>
    </q-btn>
</q-card-actions>
</q-card>
<?php endwhile; endif; ?>
</div>