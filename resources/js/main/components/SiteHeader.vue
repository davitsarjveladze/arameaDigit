<template>
  <header role="banner" class="">
    <div  v-if="windowWidth >920" class="header-wrapper ">
      <div  class="aremae-container col-lg-12" style="padding: 0 !important; max-height: 150px">
        <!-- header col-1 -->
        <div class="col-3">
          <div class="header">
            <a href="/" class="header-logo">
              <img src="https://www.aremae.com/plugins/aremae/img/logo-aremae.svg" width="280" height="190" alt="Aremae" class="header-logo-img">
            </a>
          </div>
        </div>
        <div  class="bg-primary pl-3">

        </div>
        <!-- header col-2 -->
          <div  class="col-8 d-flex align-content-start flex-wrap bg-white">
            <sponsors></sponsors>
          </div>

      </div>
    </div>
    <nav v-if="windowWidth <=920" class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="/">sitename</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown"  v-for="link in links">
                  <a  class="nav-link" :href="link.href" v-if="link.ChildLinks.length === 0">
                    link.title
                  </a>
              <span v-else class="dropdown-toggle nav-link " :id="link.title" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{link.title}}
                </span>
              <div  class="dropdown-menu bg-primary" :aria-labelledby="link.title">
                <a class="dropdown-item  text-white" :href="chLink.href" v-for="chLink in link.ChildLinks "  >{{chLink.title}}</a>
              </div>
            </li>
        </ul>

      </div>
    </nav>
  </header>
</template>

<script>
import sponsors from '../headercomponent/sponsors'
export default {
  name : 'Header',
  components : {
    sponsors
  },
  data() {
    return {
      windowWidth: window.innerWidth,
      links: [
        {
          title: "watch & listen",
          href: "/albums",
          ChildLinks : [
            {
              title: "Albums",
              href: "/albums",
            },
            {
              title: "Viedos",
              href: "/video",
            },
            {
              title: "Voices",
              href: "/voice",
            }
          ]
        },
        {
          title: "Reading",
          href: "/culture",
          ChildLinks : [
            {
              title: "culture",
              href: "/posts/culture",
            },
            {
              title: "life",
              href: "/posts/life",
            },
            {
              title: "Solidarity",
              href: "/posts/solidarity",
            }
          ]
        },
        {
          title: "Active Space",
          href: "/meeting",
          ChildLinks : [
            {
              title: "meeting artists",
              href: "/meeting",
            },
            {
              title: "little announce",
              href: "/litann",
            },
            {
              title: "Schedule",
              href: "/Schedule",
            }
          ]
        },
        {
          title: "Login",
          href: "/login",
          ChildLinks : []
        },
        {
          title: "Register",
          href: "/register",
          ChildLinks : []

        }
      ],
      sponsors : [
        {
          title : 'test1',
          url : 'https://production-gameflipusercontent.fingershock.com/us-east-1:4592c6ab-6850-4d92-9ad6-65070d161628/avatar/cf779341-188e-4f4a-9d9a-c98b04ecbf7d'

        },
        {
          title : 'test1',
url : 'https://free-images.com/or/8a4e/lion_head_isolated_art.jpg'
        },
        {
          title : 'test1',
          url : 'https://yt3.ggpht.com/a/AATXAJy4C8xoE7cYYNqZJbwy2Fd181RfgNrNUxbyemjhig=s900-c-k-c0xffffffff-no-rj-mo'
        }
      ],
      txt : '123',
      isAuth : 'asdasd',
    }
  },
  watch: {
    windowHeight(newHeight, oldHeight) {
      this.txt = `it changed to ${newHeight} from ${oldHeight}`;
    }
  },
  mounted() {
    this.$nextTick(() => {
      window.addEventListener('resize', this.onResize);
    })
  },

  beforeDestroy() {
    window.removeEventListener('resize', this.onResize);
  },

  methods: {
    onResize() {
      this.windowWidth = window.innerWidth
    }
  }
}
</script>

<style scoped>
hr {
  -webkit-transform: rotate(120deg);
  -moz-transform: rotate(120deg);
  -ms-transform: rotate(120deg);
  -o-transform: rotate(120deg);
}
.shape {
  height: 50px;
  width: 200px;
  border-bottom: 2px solid red;
  border-right: 2px solid red;
  -moz-transform: skew(-45deg);
  -webkit-transform: skew(-45deg);
  transform: skew(-45deg);
}
root {
  border: 1px solid gray;
  background-color: yellow;
  width: 100%;
  height: 200px;
  position: relative;
  overflow: hidden;
}


.slash {
  width: 200%;
  height: 200%;
  background-color: white;
  border: 5px solid gray;
  transform: rotate(45deg) translateY(100%);
}
</style>
