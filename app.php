<script type="module">
  const { createApp, ref, onBeforeMount, onMounted, h, Transition } = Vue
  const { useQuasar, setCssVar, getCssVar, colors } = Quasar
  const { lighten } = colors

  const app = Vue.createApp({

    setup() {
      const message = "در وبیدا به شما خلاقیت هدیه می‌دهیم";
      const styles =
        `
      font-size: 32px;
      font-weight: 900;
      color: #white;
      background-color: #ce1340;
      padding: 8px 16px;
      border-radius: 8px;
      font-family: 'Tahoma', Arial, sans-serif;
      `;

      console.log(`%c${message}`, styles);

      const ad = ref(true)
      const like = ref(0)
      const comment = ref(0)
      const q = useQuasar()
      const rightLayout = 'lhr lpR lfr"'
      const loading = ref(false)
      const drawer = ref(false)
      const showPageScroller = ref(false)
      const scrollY = ref(false)

      const hideAd = () => {
        ad.value = false
      }
      const toggleDrawer = () => {
        drawer.value = !drawer.value
      }

      const onScroll = () => {
        if (window.scrollY > 900) {
          showPageScroller.value = true;
        } else {
          showPageScroller.value = false;
        }
      }

      const scrollToTop = () => {
        const currentY = window.scrollY;
        const targetY = 0;
        const duration = 700;

        const startTime = performance.now();

        function step() {
          const currentTime = performance.now();
          const progress = Math.min((currentTime - startTime) / duration, 1);
          window.scrollTo(0, currentY + (targetY - currentY) * progress);

          if (progress < 1) {
            requestAnimationFrame(step);
          }
        }

        requestAnimationFrame(step);
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

      onBeforeMount(() => {

        if (loading) {
          q.loading.show({
            html: true,
            spinnerColor: 'primary',
            spinnerSize: 105,
            backgroundColor: 'webida-page',
            message: '<div class="text-body1 text-weight-600">یه کوچولو صبر کنید...</div>',
            messageColor: 'white'
          })
          document.getElementById('q-app').style.visibility = 'hidden'
        }

        window.removeEventListener('scroll', onScroll);

      })
      onMounted(() => {
        window.addEventListener('scroll', onScroll);

        // $q.onSSRHydrated()

        if (loading) {
          setTimeout(() => {
            q.loading.hide()
            document.getElementById('q-app').style.visibility = 'visible'
          }, 2550)
        }


      });

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
        like,
        comment,
        hideAd,
        drawer,
        toggleDrawer,
        menuList,
        serviceList,
        rightLayout,
        q,
        loading,
        styles,
        message,
        scrollToTop,
        showPageScroller,
        scrollY,
        miniState: ref(true),
        slide: ref(1),
        autoplay: ref(true),
        toggleTOC: ref(false),


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
  app.config.warnHandler = (msg, instance, trace) => { }
  app.mount('#q-app')

  Quasar.lang.set(Quasar.lang.fa)

</script>

<style>
  ::selection {
    background-color: var(--q-webida-primary);
    color: white;
  }

  ::-webkit-scrollbar {
    height: 12px;
    width: 14px;
    background: var(--q-webida-accent);
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