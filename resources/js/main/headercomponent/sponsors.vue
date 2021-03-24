<template>
  <div style="min-width: 900px">
  <span v-for="sponsor in sponsors" >
    <img v-if="sponsor.url" :src="sponsor.url"  class="card-img-top  p-2" style="max-height: 150px; max-width: 150px;" :alt="sponsor.title" >
    <span v-else class="alert alert-primary p-2">sponsor.title </span>
  </span>
  </div>
</template>

<script>
export default {
  name : 'sponsors',

  data() {
    return {
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
    }
  }
}
</script>

<style scoped>

</style>
