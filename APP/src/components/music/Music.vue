<template>

    <ul>
      <li class='pic' v-for="item in musicpic" :key="item.id">
        <router-link :to="'/newsong/'+ item.id">
          <img :src="item.bg" alt="">
        </router-link>
      </li>
    </ul>

</template>

<script>
  import axios from 'axios';
  export default{
    data(){
      return {
        musicpic:[],
      }
    },
    created(){
      axios
        .get('/static/data/musiclist.json')
        .then(res=>{
//          console.log(res);
          this.musicpic = res.data.albums;
        })
        .catch(res=>{
          alert('出错了')
        })
    }
}
</script>



<style scoped>
.pic img{
  float: left;
  width: 50%;

}
</style>
