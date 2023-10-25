<!DOCTYPE html>
<html>
  <head>
    <?php wp_head(); ?>

    <meta charset="UTF-8">
    <meta
      name="description"
      content="<?php echo esc_html(get_bloginfo('description')); ?>"
    />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php
  $components = get_option('quasarwp-settings');

  $rtl = isset($components['rtl-css-support']) ? '.rtl' : '';
  $robotoFont = isset($components['roboto-font']) ? 'Roboto:100,300,400,500,700,900|' : '';
  $materialIcons = isset($components['material-icons']) ? 'Material+Icons|' : '';
  $materialIconsOutlined = isset($components['material-icons-outlined']) ? 'Material+Icons+Outlined|' : '';
  $materialIconsRound = isset($components['material-icons-round']) ? 'Material+Icons+Round|' : '';
  $materialIconsSharp = isset($components['material-icons-sharp']) ? 'Material+Icons+Sharp|' : '';

  if (strlen($robotoFont . $materialIcons . $materialIconsOutlined . $materialIconsRound . $materialIconsSharp) >
    0) wp_enqueue_style('google-fonts',
    'https://fonts.googleapis.com/css?family=' . $robotoFont . $materialIcons .
    $materialIconsOutlined . $materialIconsRound . $materialIconsSharp); ?>
  </head>

  <body>
    <div id="q-app">
      
      <div
        v-if="ad"
        class="ad row items-center bg-secondary q-pa-sm text-bold text-white glossy"
      >
        <div class="col">
          <div class="row justify-center items-center q-gutter-md">
            <div class="text-weight-regular">
              با استفاده از تکنولوژی و خلاقیت بهترین نتیجه را برای شما به ارمغان
              می‌آوریم.
            </div>
            <q-btn
              unelevated
              rounded
              label="مشاوره رایگان"
              class="bg-dark text-weight-regular glossy"
              padding="6px 12px"
            />
          </div>
        </div>
        <div class="col-1">
          <div class="row justify-end">
          <q-btn round dense flat icon="o_close" @click="hideAd" />
          </div>
        </div>
      </div>
