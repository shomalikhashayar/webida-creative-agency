<q-carousel
      v-model="slide"
      transition-prev="slide"
        transition-next="slide"
        swipeable
        animated
        control-color="primary"
        navigation
        padding
        transition-duration="600"
        arrows
        height="600px"
      class="text-white"
    >
      <q-carousel-slide name="style" class="flex justify-center items-center webida-accent">
        <div class="container row">
          <div class="col row justify-between">
          <div class="row">
          <img src="http://localhost/webida/wp-content/uploads/2023/10/R.I.P.svg" alt=""
            style="width:200px">
            <h1 style="width:350px; line-height: 99px;" class="animate-characters q-pl-md text-weight-900 text-secondary">آژانس خلاقیت وبیدا</h1>
          </div>
          </div>
          <div class="col row items-center">
            <div class="row">
            <h2 class="text-h3 text-secondary">خدمات طراحی وب‌سایت حرفه‌ای برای تحول حضور آنلاین شما - امروز کسب‌وکارتان را رشد دهید!</h2>
            <p class="text-h4 text-weight-900 text-primary">در وبیدا به شما خلاقیت هدیه می‌دهیم.</p>
            </div>
          </div>
          </div>
      </q-carousel-slide>
      <q-carousel-slide name="tv" class="column no-wrap flex-center">
        <q-icon name="live_tv" size="56px" />
        <div class="q-mt-md text-center">
        first slidegggggggggggggggggggg
        </div>
      </q-carousel-slide>
      <q-carousel-slide name="layers" class="column no-wrap flex-center">
        <q-icon name="layers" size="56px" />
        <div class="q-mt-md text-center">
        first slide
        </div>
      </q-carousel-slide>
      <q-carousel-slide name="map" class="column no-wrap flex-center">
        <q-icon name="terrain" size="56px" />
        <div class="q-mt-md text-center">
        first slide
        </div>
      </q-carousel-slide>
    </q-carousel>