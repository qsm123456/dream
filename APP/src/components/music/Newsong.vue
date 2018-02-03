<template>
      <!--<h1>{{$route.params.musicId}}</h1>-->
      <aplay autoplay  :music='musicList' :showlrc="true" v-if="load" ></aplay>

</template>

<script>
  import aplay from 'vue-aplayer'
  import axios from 'axios';
  export default{
    components: {
      aplay,
    },
    data(){
      return {
        musicList:[],
        load:false,
      }
    },
    created(){
      axios
        .get('/static/data/musicdata.json')
        .then(res=>{
          console.log(res);
          res.data.musicData.forEach(element=>{
              this.musicList.push(
              {title : element.title,
              author :element.author,
              pic:element.musicImgSrc,
              url:element.src,
              lrc : '/static/'+element.lrc})
          }),
            this.load = true
        })
        .catch(res=>{
          alert('出错了')
        })
    }
  }
</script>



<style scoped>
  .aplayer.content.aplayer-withlist{
   margin: 1rem 0;
 }
</style>
