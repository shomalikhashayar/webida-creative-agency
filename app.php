
<script type="module">
const { createApp, ref, onBeforeMount, onMounted } = Vue
const { useQuasar, setCssVar, getCssVar, colors} = Quasar
const { lighten } = colors

const MyComponent = './MyComponent.vue'

const app = Vue.createApp({

  setup() {

    const ad = ref(true)
    const $q = useQuasar()
    const rightLayout = 'hHh LpR fFf'
    const loading = ref(false)
    const drawer = ref(true)
    const hideAd = () => {
      ad.value = false
    }
    const toggleDrawer = () => {
      drawer.value = !drawer.value
    }

    const menuList = [
  {
    icon: 'o_emoji_objects',
    label: 'بلاگ',
    route: '/blog'
  },
  {
    icon: 'o_diversity_3',
    label: 'درباره ما',
    route: '/about-us'
  },
  {
    icon: 'o_support_agent',
    label: 'ارتباط با ما',
    route: '/contact-us'
  },
]

const serviceList = [
  {
    icon: 'o_public',
    label: 'طراحی سایت',
    route: '/website-design'
  },
  {
    icon: 'o_speed',
    label: 'سئو سایت',
    route: '/seo'
  },
  {
    icon: 'o_draw',
    label: 'خدمات تولید محتوا',
    route: '/content-produce'
  },
  {
    icon: 'o_link',
    label: 'لینک‌سازی و خرید بک لینک',
    route: '/link-building'
  },
  {
    icon: 'o_view_quilt',
    label: 'طراحی رابط و تجربه کاربری',
    route: '/user-interface-design'
  },
  {
    icon: 'o_campaign',
    label: 'تبلیغات بنری',
    route: '/banner-advertising'
  },
]

onBeforeMount(()=> {

  if (loading) {
        $q.loading.show()
        document.getElementById('q-app').style.visibility = 'hidden'
      }

})
    onMounted(()=> {

      // $q.onSSRHydrated()

      if (loading) {
          setTimeout(() => {
            $q.loading.hide()
            document.getElementById('q-app').style.visibility = 'visible'
          }, 700)
      }

    })

    setCssVar('webida-primary', '#ce1340')
    const webidaPrimary = '#ce1340'
    setCssVar('webida-primary', webidaPrimary)
    setCssVar('webida-primary-lighten', lighten(webidaPrimary, 20))
    setCssVar('webida-secondary', '#053751')
    setCssVar('webida-accent', '#F9F6E1')
    setCssVar('webida-page', '#ed2555')
    setCssVar('webida-dark', '#2d2d2d')

  

    return {
      ad,
      hideAd,
      drawer,
      toggleDrawer,
      menuList,
      serviceList,
      rightLayout,
      $q,
      loading,
      miniState: ref(true),
      slide: ref('style'),
      autoplay: ref(true),
    }
  }
})

app.use(Quasar, {

  config: {

    framework: {
    plugins: [
      'Loading'
    ],
    },
    brand: {
     
    },

    loading: {
          /* look at QuasarConfOptions from the API card */
        },
  }
})

const routes = [
  { path: '/' },
]

const router = VueRouter.createRouter({
  history: VueRouter.createWebHistory(),
  routes, 
})
app.use(router)
app.component('service-card', {
  props: {
    title: String,
    description: String,
    img: String,
  },
  template: `
  <q-card class="service-card no-shadow q-px-md q-radius-md" style="width:350px">
  <q-card-section>
    <div class="row">
      <h2 class="text-h3 text-secondary text-weight-900 no-margin">{{title}}</h2>
      <p class="text-body1 no-letter-spacing text-secondary text-weight-300">{{description}}</p>
      <q-img class="q-my-md" :src="img" alt="" />
    </div>
  </q-card-section>
</q-card>
  `,
});
app.mount('#q-app')

Quasar.lang.set(Quasar.lang.fa)
Quasar.iconSet.set(Quasar.iconSet.material_ui)

</script>

<style>
  ::-webkit-scrollbar {
    height: 12px;
    width: 14px;
    background: #00000009;
    z-index: 12;
    overflow: visible;
  }
  
  ::-webkit-scrollbar-thumb {
    width: 10px;
    background-color: var(--q-webida-primary);
    border-radius: 10px;
    z-index: 12;
    border: 4px solid rgba(0, 0, 0, 0);
    background-clip: padding-box;
    transition: background-color .32s ease-in-out;
    margin: 8px;
    min-height: 32px;
    min-width: 32px;
  }

  ::-webkit-scrollbar-thumb:hover {
    background: var(--q-webida-primary);
  }
</style>