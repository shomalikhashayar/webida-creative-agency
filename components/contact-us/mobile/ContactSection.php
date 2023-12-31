<div class="bg-white">
  <h2 class="q-pt-lg q-pb-md no-margin text-center text-secondary text-h4 no-letter-spacing text-weight-900">دیگر
    راه‌های
    ارتباطی با
    <span class="text-weight-900 text-primary">وبیدا</span>
  </h2>

  <div class="container items-center justify-between q-pt-lg q-gutter-y-lg" style="padding-bottom:72px">

    <div class="column items-center q-gutter-y-md">
      <q-avatar size="120px" color="primary" round>
        <q-icon color="white" name="o_mail" size="80px"></q-icon>
      </q-avatar>

      <h3 class="no-margin q-pt-md text-secondary text-h5 text-weight-900 no-letter-spacing">ایمیل</h3>
      <p class="no-margin q-pt-sm q-px-lg line-height-sm text-center text-dark text-body1 text-weight-400 no-letter-spacing">تیم پشتیبانی وبیدا
        برای
        هر گونه
        کمک به شما آماده است.</p>
      <q-btn style="width: 124px" href="mailto:info@webida.ir" unelevated no-caps color="primary"
        class="text-weight-400">info@webida.ir</q-btn>
    </div>

    <div class="column items-center q-gutter-y-md">
      <q-avatar size="120px" color="primary" round>
        <q-icon color="white" name="o_location_on" size="80px"></q-icon>
      </q-avatar>

      <h3 class="q-pt-md no-margin text-secondary text-h5 text-weight-900 no-letter-spacing">نشانی</h3>
      <p class="q-px-lg line-height-sm no-margin q-py-sm text-dark text-body1 text-weight-400 no-letter-spacing">
        به ما سر بزنید، خوشحال میشیم.</p>
      <p class="q-px-lg line-height-sm text-center no-margin text-primary text-body1 text-weight-400 no-letter-spacing">تهـران، فلکه دوم
        صادقیه، خیابان آیت الله کاشانی، خیابان بهنام، خیابان مقداد، برج ترنج</p>
    </div>

    <div class="column items-center q-gutter-y-md">
      <q-avatar size="120px" color="primary" round>
        <q-icon color="white" name="o_phone_in_talk" size="80px"></q-icon>
      </q-avatar>

      <h3 class="q-pt-md no-margin text-secondary text-h5 text-weight-900 no-letter-spacing">تلفن</h3>
      <p class="q-px-lg line-height-sm q-py-sm text-center no-margin text-dark text-body2 text-weight-400 no-letter-spacing">شنبه تا چهارشنبه
        از
        ساعت 9 الی 18
        پنجشنبه‌ها از ساعت 9 الی 13</p>
      <q-btn unelevated style="width:124px" color="primary" label="پشتیبانی" icon="o_perm_phone_msg">
        <q-menu anchor="center middle" self="center middle" transition-show="jump-down" transition-hide="jump-up"
          style="width:240px" :offset="[0, 10]">
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
    </div>

    <form id="contactForm" action="" method="post" class="q-mt-xl">
      <input type="hidden" name="action" value="process_contact_form">
      <q-card bordered class="no-shadow" style="height:500px">
        <q-card-section class="q-pa-lg">
          <div class="column q-gutter-y-md">
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
                <q-input color="primary" name="phone" hide-bottom-space v-model="phoneNumber" dense required lazy-rules
                  outlined :rules="[(val) => val !== null && val !== '']"></q-input>
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
            class="q-mt-xl text-body1 q-pa-md full-width"></q-btn>
        </q-card-section>
      </q-card>
    </form>
  </div>
</div>