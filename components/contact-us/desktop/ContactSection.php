<div class="bg-white">
  <h2 class="q-mt-xl q-mb-lg text-center text-secondary text-h3 no-letter-spacing text-weight-800">دیگر راه‌های
    ارتباطی با
    <span class="text-weight-800 text-primary">وبیدا</span>
  </h2>

  <div class="container row items-center justify-between q-pt-xl" style="padding-bottom:72px">
    <div class="col-6">

      <form id="contactForm" action="" method="post">
        <input type="hidden" name="action" value="process_contact_form">
        <q-card bordered class="no-shadow" style="height:500px">
          <q-card-section class="q-pa-xl">
            <div class="row q-gutter-x-lg">
              <div class="col">
                <div class="q-gutter-y-sm">
                  <q-item-label class="no-letter-spacing text-grey-7 text-body1">نام و نام خانوادگی
                    <span class="text-primary">(ضروری)</span></q-item-label>
                  <q-input name="name" required color="primary" hide-bottom-space v-model="fullName" dense required
                    lazy-rules outlined :rules="[(val) => val !== null && val !== '']"></q-input>
                </div>
              </div>
              <div class="col">
                <div class="q-gutter-y-sm">
                  <q-item-label required class="no-letter-spacing text-grey-7 text-body1">شماره تماس <span
                      class="text-primary">(ضروری)</span></q-item-label>
                  <q-input color="primary" name="phone" hide-bottom-space v-model="phoneNumber" dense required
                    lazy-rules outlined :rules="[(val) => val !== null && val !== '']"></q-input>
                </div>
              </div>
            </div>

            <div class="q-gutter-y-sm q-mt-lg">
              <q-item-label class="no-letter-spacing text-grey-7 text-body1">جا متنی <span
                  class="text-primary">(ضروری)</span></q-item-label>
              <q-input name="message" required color="primary" v-model="contactMessage" outlined clearable
                type="textarea"></q-input>
            </div>
            <q-btn type="submit" label="برسد به دستمان" icon="o_mail" color="primary" unelevated
              class="q-mt-lg text-body1 q-pa-md full-width"></q-btn>
          </q-card-section>
        </q-card>
      </form>

    </div>
    <div class="col-5 column q-gutter-y-xl">

      <q-item>
        <div class="row items-center">
          <q-item-section avatar>
            <q-avatar size="120px" color="primary" round>
              <q-icon color="white" name="o_mail" size="80px"></q-icon>
            </q-avatar>
          </q-item-section>

          <q-item-section class="column justify-center q-gutter-y-sm q-ml-md">
            <h3 class="no-margin text-secondary text-h5 text-weight-800 no-letter-spacing">ایمیل</h3>
            <p class="no-margin text-dark text-body1 text-weight-400 no-letter-spacing">تیم پشتیبانی وبیدا
              برای
              هر گونه
              کمک به شما آماده است.</p>
            <q-btn style="width: 124px" href="mailto:info@webida.ir" unelevated no-caps color="primary"
              class="text-weight-700">info@webida.ir</q-btn>
          </q-item-section>
        </div>
      </q-item>

      <q-item>
        <div class="row items-center">
          <q-item-section avatar>
            <q-avatar size="120px" color="primary" round>
              <q-icon color="white" name="o_location_on" size="80px"></q-icon>
            </q-avatar>
          </q-item-section>

          <q-item-section class="column q-gutter-y-sm q-ml-md">
            <h3 class="no-margin text-secondary text-h5 text-weight-800 no-letter-spacing">نشانی</h3>
            <p class="no-margin text-dark text-body1 text-weight-400 no-letter-spacing">
              به ما سر بزنید، خوشحال میشیم.</p>
            <p class="no-margin text-primary text-body1 text-weight-400 no-letter-spacing">تهـران، فلکه دوم
              صادقیه، خیابان آیت الله کاشانی، خیابان بهنام، خیابان مقداد، برج ترنج</p>
          </q-item-section>
        </div>
      </q-item>

      <q-item>
        <div class="row items-center">
          <q-item-section avatar>
            <q-avatar size="120px" color="primary" round>
              <q-icon color="white" name="o_phone_in_talk" size="80px"></q-icon>
            </q-avatar>
          </q-item-section>

          <q-item-section class="column justify-center q-gutter-y-sm q-ml-md">
            <h3 class="no-margin text-secondary text-h5 text-weight-800 no-letter-spacing">تلفن</h3>
            <p class="no-margin text-dark text-body2 text-weight-400 no-letter-spacing">شنبه تا چهارشنبه از
              ساعت 9 الی 18
              پنجشنبه‌ها از ساعت 9 الی 13</p>
            <q-btn unelevated style="width:124px" color="primary" label="پشتیبانی" icon="o_perm_phone_msg">
              <q-menu fit transition-show="jump-down" transition-hide="jump-up" style="width:240px" :offset="[0, 10]">
                <q-list padding>
                  <q-item class="row items-center q-py-sm" clickable href="tel:09338603196">
                    <div>
                      <q-item-section avatar>
                        <q-avatar icon="o_person" size="md" text-color="white" color="primary" />
                      </q-item-section>
                    </div>
                    <div class="column q-gutter-y-xs">
                      <q-item-label caption>خشایار شمالی</q-item-label>
                      <q-item-section class="text-brand">09338603196</q-item-section>
                    </div>
                  </q-item>
                  <q-item class="row items-center q-py-sm" clickable href="tel:09215848587">
                    <div>
                      <q-item-section avatar>
                        <q-avatar icon="o_person" size="md" text-color="white" color="primary" />
                      </q-item-section>
                    </div>
                    <div class="column q-gutter-y-xs">
                      <q-item-label caption>محمدحسین خان‌محمدی</q-item-label>
                      <q-item-section class="text-brand">09215848587</q-item-section>
                    </div>
                  </q-item>
                  <q-item class="row items-center q-py-sm" clickable href="tel:09100854885">
                    <div>
                      <q-item-section avatar>
                        <q-avatar icon="o_person" size="md" text-color="white" color="primary" />
                      </q-item-section>
                    </div>
                    <div class="column q-gutter-y-xs">
                      <q-item-label caption>فاطمه نیلچی</q-item-label>
                      <q-item-section class="text-brand">09100854885</q-item-section>
                    </div>
                  </q-item>
                </q-list>
              </q-menu>
            </q-btn>
          </q-item-section>
        </div>
      </q-item>
    </div>
  </div>
</div>