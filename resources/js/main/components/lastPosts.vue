<template>
  <div class="content container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="h2-home">Last Posts</h2>
      </div>
    </div>


    <div class="row row-cols-1 row-cols-md-3">
      <!-- card event 42 -->
      <div v-for="Post in lastPosts" class="col-lg-4 mb-5">
        <div class="card-event h-100">
          <div class="card-event-top">
            <div class="card-event-img">
              <img :src="Post.img_url" class="no_logo" width="677" height="677" alt="">
            </div>
            <div class="card-event-keyword">
              <a href="Publications.html" class="card-event-keyword-link">
                <img :src="Post.author_url" class="rounded-circle" alt="" width="40" height="40">					<span>{{ Post.author_name }}</span>
              </a>
            </div>
          </div>
          <div class="card-event-body">
            <div class="card-event-date">
              {{Post.date}}
            </div>
            <div class="card-event-titre">
              <a href="Lettre-de-l-Aremae-Janvier-2021.html">{{ Post.title }}</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'lastPosts',
  data() {
    return {
      lastPosts : [
        {
          img_url     : 'https://lt.marywinstead.org/images/167/167651/390405b14107524186d1462b7c07f15f.jpg',
          author_url  : 'https://avatars.mds.yandex.net/get-zen_doc/3822405/pub_5f6867dcb142594c53760aef_5f689267f52b7a18813d87f0/scale_1200',
          title       : 'Dogs are our friends',
          date        : '25/11/2024',
          author_name : 'James Maksel',
          id          : '2',
        },
        {
          img_url     : 'https://i.pinimg.com/736x/3a/c3/44/3ac3441542c0c89cd6ff610b524cd074--early-autumn-autumn-harvest.jpg',
          author_url  : 'https://www.indiewire.com/wp-content/uploads/2013/11/canon-1.jpg',
          title       : 'The world seen in the reflection',
          date        : '24/11/2024',
          author_name : 'lasha lamazoshvili',
          id          : '3',
        },
        {
          img_url     : 'http://1.bp.blogspot.com/-D_nrdFyd0i8/VpsTQakvjFI/AAAAAAAAIaA/z5kXHRUvGI0/s400/leaf-533545_960_720.jpg',
          author_url  : 'https://yt3.ggpht.com/a/AATXAJyFJr0cLnAO2lskBasoLy9mxsi-0P47jt1wZg=s900-c-k-c0xffffffff-no-rj-mo',
          title       : 'Green',
          date        : '24/11/2024',
          author_name : 'amsetr dami',
          id          : '5',

        },
        {
          img_url     : 'https://i04.fotocdn.net/s109/21f7daac6265b6c1/public_pin_l/2427516734.jpg',
          author_url  : 'https://thumbs.dreamstime.com/b/%D1%81%D1%87%D0%B0%D1%81%D1%82-%D0%B8%D0%B2%D1%8B%D0%B9-%D0%B0%D1%84%D1%80%D0%BE-%D0%B0%D0%BC%D0%B5%D1%80%D0%B8%D0%BA%D0%B0%D0%BD%D1%81%D0%BA%D0%B8%D0%B9-%D1%87%D0%B5-%D0%BE%D0%B2%D0%B5%D0%BA-89745929.jpg',
          title       : 'The beauty of our world',
          date        : '24/11/2024',
          author_name : 'nikanor artogoni',
          id          : '4',

        },
        {
          img_url     : 'https://astromegaplus.com/wp-content/uploads/2019/05/luna-llena-1068x601.jpg',
          author_url  : 'https://cdn.wallpapersafari.com/83/7/Ip78Kz.jpg',
          title       : 'The moon will be caught by a swan',
          date        : '24/12/2014',
          author_name : 'white swan',
          id          : '6',
        },

      ]
    }
  }
}
</script>


