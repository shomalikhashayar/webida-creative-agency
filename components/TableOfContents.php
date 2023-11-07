<q-card bordered class="no-shadow q-radius-sm q-my-lg"
  style="border: 2px solid var(--q-webida-secondary) !important;">
  <q-card-section class="row items-center justify-between text-secondary text-weight-600 text-body2 no-letter-spacing">
    <div class="row items-center"><q-icon size="lg" name="format_quote" color="primary" class="q-mr-xs"></q-icon>
      <span>دسترسی سریع به عناوین مقاله</span>
    </div>
    <q-btn @click="toggleTOC = !toggleTOC" round dense flat unelevated icon="expand_more" color="secondary"></q-btn>
  </q-card-section>
  <q-card-section class="q-pa-none">
    <q-slide-transition v-show="toggleTOC">
      <div class="q-px-md">
        <div class="q-pb-md">