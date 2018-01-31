<template>
  <div>
      <ul class="list" >
      <li @click="getDetail(movie.id)" class='movie' v-for="movie in movieList" :key="movie.id">
        <div class="movie-img">
          <img :src="movie.img" alt="">
        </div>
      </li>
    </ul>
  </div>
</template>

<script>
import axios from 'axios';
export default {
    data(){
        return {
          movieList: [],
        }
  },
    methods: {
        getMovieData(){
          axios
            .get(
              API_PROXY +
              `http://m.maoyan.com/movie/list.json?type=hot&offset=${
                this.movieList.length
                }&limit=10`
            );
          },
        getDetail(movieId) {
        this.$router.push(`/moviedetail/${movieId}`);
        },
  },
    created(){
        this.getMovieData;
    },

}
</script>



<style scoped>
csdru
</style>
