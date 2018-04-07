<template>

</template>

<script>
  import axios from 'axios'
  export default{
    data(){
      return {
        List: [],
      }
    },
    created(){
      axios
        .get(API_PROXY + 'http://web.juhe.cn:8080/constellation/getAll?type=today&key=e5bf183f7d26ac1fb29fcfa0ef2d8a66')
        .then(res => {
          console.log(res);
//          this.List = res.data.photoData;
        })
        .catch(res => {
          alert('出错了')
        })
    },
    methods: {}
  }
</script>


<style scoped>

</style>
