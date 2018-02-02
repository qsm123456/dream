<template>
  <div class="newsong">
    <!--<div class="newsong-img"><img :src="pic.imgurl" alt=""></div>-->
    <ul class="ns-list">
      <li v-for="music in musicList">{{music.filename}}</li>
    </ul>
    <audio src=""></audio>
  </div>
</template>

<script>
  import axios from 'axios';
  export default{
    data(){
      return {
        musicList:[],
      }
    },
    created(){
      axios
        .get(API_PROXY + 'http://m.kugou.com/?json=${20130320}')
        .then(res=>{
          console.log(res);
          this.musicList = res.data.data;
        })
        .catch(res=>{
          alert('出错了')
        })
    }
  }
</script>



<style scoped>
  .ns-list{
    margin-left: 1rem;
  }
.ns-list li {
  height: .7rem;
  text-align: left;
  /*text-indent: 1rem;*/
}
</style>
