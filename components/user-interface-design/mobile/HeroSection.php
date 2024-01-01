<div class="bg-accent">
    <div class="container q-py-xl items-center">
        <div class="column items-center">
            <!-- تایتل تبلت  -->
            <h2 class="text-h3 no-letter-spacing  no-margin text-center text-weight-900 text-secondary" v-if="$q.screen.sm">
            طراحی رابط کاربری به گونه ای که همیشه خواسته اید!
            </h2>
            <!-- تایتل موبایل -->
            <h2 class="text-h4 no-margin  no-letter-spacing text-center text-weight-900 text-secondary" v-if="$q.screen.xs">
            طراحی رابط کاربری به گونه ای که همیشه خواسته اید!
            </h2>
            <p class="no-letter-spacing no-margin q-py-xl text-body1 text-center text-weight-400 line-height-sm text-dark">
            ما اینجا هستم تا طراحی رابط کاربری و تجربه کاربری سایت و اپلیکیشن شما رو به صورت حرفه ای طراحی کنیم.

            </p>
            <img class="fit q-pb-md"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/UI-UX-Hero-mobile.svg" alt="Explanations about the user interface and user experience"
                style="max-width:250px;">
        
            <q-btn @click="" unelevated rounded label="به خلاقیت نیاز دارم"
                class="webida-primary text-white no-letter-spacing  text-body2 text-weight-regular items-end" padding="10px 24px">
            </q-btn>
        </div>
    </div>
</div>