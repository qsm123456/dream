<template>
  <html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <div>
    <ul class="list" >
      <li @click="getDetail(movie.id)" class='movie' v-for="movie in movieList" :key="movie.id" >
        <div class="movie-img">
          <img :src="movie.img" alt="">
        </div>
        <div class="movie-detail">
          <h3>{{movie.nm}}</h3>
          <p>{{movie.ver}}</p>
          <p>{{movie.star}}</p>
          <p>{{movie.rt}}</p>
        </div>
      </li>
      <div class="loading" v-show="isLoading"><img src="../../assets/img/load3.gif" alt=""></div>
      <div class="tip" v-show="isEnd">没有数据了</div>
    </ul>
  </div>
  </html>
</template>

<script>
import axios from 'axios';
export default {
    data(){
        return {
            movieList:[],
            isLoading:true,
            isEnd:false,
        }
    },
    methods:{
      getData(){
         axios
           .get(API_PROXY +  `http://m.maoyan.com/movie/list.json?type=hot&offset=${this.movieList.length}&limit=10`)
           .then(res => {
//               console.log(res);
             let list =  res.data.data.movies;
             if(list<10){
                this.isEnd=true;
             }else{
                this.movieList = this.movieList.concat(list);
                this.isLoading = false;
             }
           }).catch(res => {
           alert('加载失败')
         })
    },
      getDetail(movieId) {
           this.$router.push(`/moviedetail/${movieId}`);
       }
    },

    created(){
          this.getData();
         },
    mounted() {
      window.onscroll = () => {
      let scrollTop = document.documentElement.scrollTop;
      let clientHeight = document.documentElement.clientHeight;
      let scrollHeight = document.documentElement.scrollHeight;
//      console.log(scrollTop ,clientHeight,scrollHeight);
      if (scrollTop + clientHeight >=scrollHeight && !this.isEnd) {
        this.isLoading = true;
        this.getData();
      }
    };
  }
}
</script>



<style scoped>
  .list{
    /*margin: 1rem 0;*/
  }
  .movie{
    display: flex;
    margin: .03rem;
    border-bottom: .03rem solid #ccc;
  }
  .movie-img{
    flex-grow: 1;
    width: 0;
    padding: .1rem;
}
  .movie-detail{
    flex-grow: 2;
    width: 0;
    text-align: left;
  }
.movie-detail h3{
    font-weight: bolder;
}
  .loading{
    position: fixed;
    bottom: 1rem;
    left: 50%;
    transform: translate(-50%);
    opacity: 0.8;
  }
</style>
