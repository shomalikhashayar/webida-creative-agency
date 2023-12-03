
<template class="xs" v-if="$q.screen.xs">
    <q-dialog v-model="ConsultantModal" position="bottom">
        <q-card class="q-radius-md bg-primary no-shadow no-border">
            <q-card-section class="q-pa-lg">
                <div class="text-h3 text-weight-700 text-white no-letter-spacing no-margin line-height-sm">در زمان و
                    هزینه‌های خود صرفه‌جویی کنید</div>
                <div
                    class="q-pa-sm q-my-md line-height-xs q-radius-sm text-body1 text-weight-400 webida-primary-lighten no-letter-spacing">
                    ما به شما
                    کمک خواهیم کرد تا بهترین تصمیمات را برای خلق یک تجربه آنلاین اختیار کنید</div>

                <q-btn href="tel:09215848578" rounded unelevated class="bg-white text-primary">
                    <span class="text-body1 text-weight-700 no-letter-spacing">شماره تماس مدیریت</span>
                </q-btn>

            </q-card-section>

            <q-card-section class="q-pa-lg">
                <img style="width: 250px"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/business-man.svg"></img>
            </q-card-section>
        </q-card>
    </q-dialog>
</template>

<template class="sm" v-if="$q.screen.sm">
    <q-dialog v-model="ConsultantModal" position="bottom">
        <q-card class="q-radius-md bg-primary no-shadow no-border">
            <q-card-section class="q-pa-xl">
                <div class="text-h2 q-pb-sm text-weight-700 text-white no-letter-spacing no-margin line-height-md">در زمان و
                    هزینه‌های خود صرفه‌جویی کنید</div>
                <div
                    class="q-pa-sm q-my-lg line-height-sm q-radius-sm text-h3 text-weight-400 webida-primary-lighten no-letter-spacing">
                    ما به شما
                    کمک خواهیم کرد تا بهترین تصمیمات را برای خلق یک تجربه آنلاین اختیار کنید</div>

                <q-btn href="tel:09215848578" rounded unelevated class="bg-white text-primary">
                    <span class="text-h3 text-weight-500 no-letter-spacing">شماره تماس مدیریت</span>
                </q-btn>

            </q-card-section>

            <q-card-section class="q-pa-xl">
                <img style="width: 350px"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/business-man.svg"></img>
            </q-card-section>
        </q-card>
    </q-dialog>
</template>

<template class="gt-sm" v-if="$q.screen.gt.sm">
    <q-dialog v-model="ConsultantModal" position="bottom">
        <q-card class="q-radius-md bg-primary no-shadow no-border">
            <q-card-section horizontal>
                <q-card-section class="q-pa-lg">
                    <div class="text-h3 text-weight-700 text-white no-letter-spacing no-margin line-height-sm">در زمان و
                        هزینه‌های خود صرفه‌جویی کنید</div>
                    <div
                        class="q-pa-sm q-my-md line-height-xs q-radius-sm text-body1 text-weight-400 webida-primary-lighten no-letter-spacing">
                        ما به شما
                        کمک خواهیم کرد تا بهترین تصمیمات را برای خلق یک تجربه آنلاین اختیار کنید</div>

                    <q-btn href="tel:09215848578" rounded unelevated class="bg-white text-primary">
                        <span class="text-body1 text-weight-700 no-letter-spacing">شماره تماس مدیریت</span>
                    </q-btn>

                </q-card-section>

                <img style="width: 250px" class="q-ma-lg col-5"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/business-man.svg"></img>
            </q-card-section>
        </q-card>
    </q-dialog>
</template>
