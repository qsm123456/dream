<template>
    <div class="detail" >
      <div class="detail-info">
        <div class="detail-img"><img :src="detail.img" alt=""></div>
        <div class="detail-right">
          <h4 class="detail-name">{{detail.nm}}</h4>
          <p class="detail-cat">{{detail.cat}}</p>
          <p class="detail-src">{{detail.src}}</p>
        </div>
      </div>

      <div class="detail-introduce" v-html="detail.dra"></div>
      <div class="starring">主演：{{ detail.star  }}</div>
    </div>
</template>

<script>
  import axios from "axios";
  export default {
    data() {
      return {
        detail:{},
      };
    },
    created() {
      axios
        .get(
          `${API_PROXY}http://m.maoyan.com/movie/${
            this.$route.params.movieId
            }.json`
        )
        .then(res => {
          console.log(res)
          this.detail = res.data.data.MovieDetailModel;
        })
        .catch(res => {
          alert("error");
        });
    }
  };
</script>

<style scoped>
    .detail-info{
      display: flex;
      padding: 0.2rem 0.2rem;
    }
    .detail-img{
     flex-grow: 1;
      width: 0;
    }
    .detail-right{
      flex-grow: 2;
      margin: 0.2rem 0.2rem;
      text-align: left;
    }
    .detail-introduce{
      margin: 0.1rem ;
      text-align: left;
    }
    .starring{
      text-align: left;
      margin-top: .5rem;

    }
</style>
