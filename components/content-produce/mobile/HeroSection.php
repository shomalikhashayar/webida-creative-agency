<div class="bg-accent">
    <div class="container q-py-xl items-center">
        <div class="column items-center">
            <!-- تایتل تبلت  -->
            <h2 class="text-h2 no-margin text-center text-weight-900 text-secondary" v-if="$q.screen.sm">
            محتوایی که همیشه در خانهٔ ذهن خوانندگان می‌ماند
            </h2>
            <!-- تایتل موبایل -->
            <h2 class="text-h4 no-margin text-center text-weight-900 text-secondary" v-if="$q.screen.xs">
                محتوایی که همیشه در خانهٔ ذهن خوانندگان می‌ماند
            </h2>
            <img class="fit q-pt-lg q-pb-md"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/content-produce-hero.png" alt=""
                style="max-width:550px;">
            <p class="no-letter-spacing no-margin q-pb-lg text-body1 text-weight-500 line-height-sm text-dark">
                خلق داستان‌های جاودانه با ما. سفری به دنیایی از واژه‌ها، احساسات و ایده‌ها‌! از آغاز تا انتها، هر جمله،
                هر پاراگراف و هر صفحه، شما را در خود جذب خواهد کرد.
            </p>
            <q-btn @click="" unelevated rounded label="محتوا می‌خواهم"
                class="webida-primary text-white text-body2 text-weight-regular items-end" padding="10px 24px">
            </q-btn>
        </div>
    </div>
</div>