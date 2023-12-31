<div class="bg-accent">
    <div class="container seo-hero-section items-center">
        <div class="column  items-center">
            <h2 class="text-h3 no-margin  no-letter-spacing text-center text-weight-900 text-secondary" v-if="$q.screen.sm">
                سئو: جادویی که وبسایتتان را به بالاترین اوج‌ها سوق می‌دهد!
            </h2>
            <h2 class="text-h4 no-margin text-center no-letter-spacing  text-weight-900 text-secondary" v-if="$q.screen.xs">
                سئو: جادویی که وبسایتتان را به بالاترین اوج‌ها سوق می‌دهد!
            </h2>
            <p class="no-letter-spacing q-mt-md q-mb-lg text-body1 text-weight-400 line-height-sm text-dark">
                کسب‌وکارتان را در صدر نتایج گوگل ببینید.
            </p>
            <img class="fit" src="<?php echo get_template_directory_uri(); ?>/assets/images/seo-hero.png" alt="See the business at the top of Google results"
                style="max-width:550px;">

            <div class="row justify-center q-pt-lg q-gutter-sm ">
                <q-btn @click="" unelevated rounded label="مشاوره سئو"
                    class="webida-primary no-letter-spacing  text-white text-body2 text-weight-regular " padding="10px 24px">

                </q-btn>
                <q-btn flat @click="ConsultantModal = true" unelevated rounded label="خرید بک لینک"
                    class="text-primary  no-letter-spacing text-body2 text-weight-regular white-btn "
                    padding="10px 24px">
                </q-btn>
            </div>
        </div>
    </div>
</div>