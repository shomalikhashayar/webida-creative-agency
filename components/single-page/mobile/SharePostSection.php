<div class="row items-center justify-center q-gutter-sm q-mt-xl q-mb-md">
    <q-btn dense round flat color="primary" icon="o_send" @click="sharePostURL">
    </q-btn>
    <div class="row items-center">
        <!-- Like button -->
        <q-btn round dense flat icon="o_thumb_up" color="primary" class="like" rel="<?php echo $post->ID; ?>"></q-btn>

        <!-- Span to display like count -->
        <span class="like-count text-body1 text-dark text-bold q-ml-sm">
            <?php echo likeCount($post->ID); ?>
        </span>
    </div>
</div>

<div class="q-pt-xs q-pb-md">
    <q-separator></q-separator>

    <div class="q-my-md">
        <?php get_template_part("components/single-page/PostNavigation") ?>
    </div>

    <q-separator></q-separator>
</div>