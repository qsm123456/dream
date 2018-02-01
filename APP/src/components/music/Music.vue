<template>

</template>

<script>
  import axios from 'axios';
    export default{
        data(){
            return {
              musicList:[]
            }
        },
        created(){
          axios
            .post(API_PROXY + 'http://music.163.com/api/search/get/web?csrf_token=')
            .then(res=>{
                console.log(res);
//               this.musicList =
            })
            .catch(res=>{
                alert('出错了')
            })
        }
    }
</script>



<style scoped>

</style>
