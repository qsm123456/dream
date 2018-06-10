<template>
  <html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <aplay id="music" :musicList='musicList' :iNow='iNow' :isPlay='isPlay'></aplay>
  </html>


</template>

<script>
  import aplay from 'vue-music-component'
  import axios from 'axios';
  export default{
    components: {
      aplay,
    },
    data(){
      return {
        musicList:[],
        load:false,
        iNow: null,
        isPlay: false
      }
    },
    created(){
      axios
        .get('/static/data/musicdata.json',
        )
        .then(res=>{
//          console.log(res);
          res.data.musicData.forEach(element => {
            this.musicList.push(
              {
                album_title: element.title,
                artist_name: element.author,
                pic_small: element.musicImgSrc,
                src: element.src,
                id: element.js_id,
                lrcSrc: '/static/' + element.lrc
              })
          });
          this.load = true;
//            console.log(this.musicList);
          this.iNow = 0;
        })
        .catch(res=>{
          alert('出错了')
        })
    }
  }
</script>

<style scoped>
  #music {
    width: 6.4rem;
    height: 9.4rem;
  }
</style>
