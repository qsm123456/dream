<template>

    <ul>
      <li class='pic' v-for="item in musicpic" :key="item.id">
        <img :src="item.bg" alt="" @click="getNewsong(item.id)">
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

    },
    methods: {
      getNewsong(movieId){
        if (movieId == 3779629) {
          this.$router.push(`/newsong/${movieId}`);
        } else {
          this.$router.push(`/${movieId}`);
        }
      }
    }
}
</script>



<style scoped>
.pic img{
  float: left;
  width: 50%;
}
</style>
