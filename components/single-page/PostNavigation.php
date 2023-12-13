<?php
$prev_post = get_previous_post();
$next_post = get_next_post();
?>
<div class="row justify-between post-navigation">
    <div class="col row justify-start">
        <?php if ($next_post): ?>
            <q-btn padding="8px 16px" flat unelevated color="primary" class="q-radius-xs"
                href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
                <div class="row items-center justify-center">
                    <q-icon name="o_arrow_forward" size="28px" class="q-mr-sm"></q-icon>
                    <div class="text-weight-700 text-h6 no-letter-spacing">پست بعدی</div>
                </div>
            </q-btn>
        <?php endif; ?>
    </div>

    <div class="col row justify-end">
        <?php if ($prev_post): ?>
            <q-btn padding="8px 16px" flat unelevated color="primary" class="q-radius-xs"
                href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
                <div class="row items-center justify-center">
                    <div class="text-weight-700 text-h6 no-letter-spacing">پست قبلی</div>
                    <q-icon name="o_arrow_back" size="28px" class="q-ml-sm"></q-icon>
                </div>
            </q-btn>
        <?php endif; ?>
    </div>
</div>